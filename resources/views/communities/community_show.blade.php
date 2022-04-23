@extends('results.result_index')
    
@section('content')
    <div class="contents">
            
        <div class='name'>
            <h1>{{ $community->name }}</h1>
        </div>
        <div class="community_contents">
            <p>{{ $community->body }}</p>
        </div>
        <div class="community_results">
            <div class="total_matchs">
                <h2>コミュニティ全体試合数</h2>
                <h2>{{ $community->results->count() }}試合</h2>
            </div>
            <div class="percent_winner">
                <h2>クルー勝率</h2>
                    @php
                        if($community->results->where("winner", "clue")->count() != 0){
                            $community_clues_win = floor($community->results->where("winner", "clue")->count() / $community->results->count() * 100);
                        } else {
                            $community_clues_win = 0;
                        }
                        $community_impostors_win = 100 - $community_clues_win;
                    @endphp
                <h3>{{ $community_clues_win }}%</h3>
            </div>
            <div class="percent_winner">
                <h2>インポスター勝率</h2>
                <h3>{{ $community_impostors_win }}%</h3>
            </div>
                
                
        </div>
        <div class="community_players">
            <h2>所属プレイヤー</h2>
            <table class="player_informations" border="1">
                <tr>
                    <th>名前</th><th>試合数</th><th>クルー勝率</th><th>インポスター勝率</th>
                </tr>
                    @foreach($community->players as $player)
                        <tr>
                            <td><a style="color:{{ $player->color }};" href="/players/{{ $player->id }}">{{ $player->name }}</a></td>
                            <td>{{ $player->results->count() }}試合</td>
                            @php
                                $clues_match = DB::table('players')
                                ->rightJoin('player_result', 'players.id', '=', 'player_result.player_id')
                                ->leftJoin('results', 'player_result.result_id', '=', 'results.id')
                                ->where('players.id', $player->id)->whereIn('player_result.role', ['clue', 'sheriff'])
                                ->count();
                                $clues_win = DB::table('players')
                                ->rightJoin('player_result', 'players.id', '=', 'player_result.player_id')
                                ->leftJoin('results', 'player_result.result_id', '=', 'results.id')
                                ->where('players.id', $player->id)->whereIn('player_result.role', ['clue', 'sheriff'])->where('results.winner', 'clue')
                                ->count();
                                $impostors_match = DB::table('players')
                                ->rightJoin('player_result', 'players.id', '=', 'player_result.player_id')
                                ->leftJoin('results', 'player_result.result_id', '=', 'results.id')
                                ->where('players.id', $player->id)->whereIn('player_result.role', ['impostor', 'madmate'])
                                ->count();
                                $impostors_win = DB::table('players')
                                ->rightJoin('player_result', 'players.id', '=', 'player_result.player_id')
                                ->leftJoin('results', 'player_result.result_id', '=', 'results.id')
                                ->where('players.id', $player->id)->whereIn('player_result.role', ['impostor', 'madmate'])->where('results.winner', 'impostor')
                                ->count();
                            if($clues_win != 0){
                                $clues_win = floor($clues_win / $clues_match * 100);
                            } else {
                                $clues_win = 0;
                            }
                            if($impostors_win != 0){
                                $impostors_win = floor($impostors_win / $impostors_match * 100);
                            } else {
                                $impostors_win = 0;
                            }
                            @endphp 
                            <td>{{ $clues_win }}%</td>
                            <td>{{ $impostors_win }}%</td>
                        </tr>
                    @endforeach
            </table>
                
        </div>
             
        <div>
            <p><a href='/regulations/resultion_create/{{ $community->id }}'>レギュレーション登録</a></p>
        </div>
        <div>
            <p><a href='/players/player_create/{{ $community->id }}'>プレイヤー登録</a></p>
        </div>
            <a href="/communities/community_index">戻る</a>
        </div>
@endsection