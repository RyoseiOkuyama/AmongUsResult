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
                            @if($player->user_id ===Null)
                                <td><a style="color:{{ $player->color }};" href="/players/player_show/{{ $player->id }}">{{ $player->name }}</a></td>
                            @else
                                <td><a style="color:{{ $player->color }};" href="/players/player_show/{{ $player->id }}">{{ $player->user->name }}</a></td>
                            @endif
                            <td>{{ $player->results->count() }}試合</td>
                            @php
                                $player_clues_match = DB::table('players')
                                ->rightJoin('player_result', 'players.id', '=', 'player_result.player_id')
                                ->leftJoin('results', 'player_result.result_id', '=', 'results.id')
                                ->where('players.id', $player->id)->whereIn('player_result.role', ['clue', 'sheriff'])
                                ->count();
                                $player_clues_win = DB::table('players')
                                ->rightJoin('player_result', 'players.id', '=', 'player_result.player_id')
                                ->leftJoin('results', 'player_result.result_id', '=', 'results.id')
                                ->where('players.id', $player->id)->whereIn('player_result.role', ['clue', 'sheriff'])->where('results.winner', 'clue')
                                ->count();
                                $player_impostors_match = DB::table('players')
                                ->rightJoin('player_result', 'players.id', '=', 'player_result.player_id')
                                ->leftJoin('results', 'player_result.result_id', '=', 'results.id')
                                ->where('players.id', $player->id)->whereIn('player_result.role', ['impostor', 'madmate'])
                                ->count();
                                $player_impostors_win = DB::table('players')
                                ->rightJoin('player_result', 'players.id', '=', 'player_result.player_id')
                                ->leftJoin('results', 'player_result.result_id', '=', 'results.id')
                                ->where('players.id', $player->id)->whereIn('player_result.role', ['impostor', 'madmate'])->where('results.winner', 'impostor')
                                ->count();
                            if($player_clues_win != 0){
                                $player_clues_win = floor($player_clues_win / $player_clues_match * 100);
                            } else {
                                $player_clues_win = 0;
                            }
                            if($player_impostors_win != 0){
                                $player_impostors_win = floor($player_impostors_win / $player_impostors_match * 100);
                            } else {
                                $player_impostors_win = 0;
                            }
                            @endphp 
                            <td>{{ $player_clues_win }}%</td>
                            <td>{{ $player_impostors_win }}%</td>
                        </tr>
                    @endforeach
            </table>
                
        </div>
             
        <div>
            <p><a href='/regulations/regulation_create/{{ $community->id }}'>レギュレーション登録</a></p>
        </div>
        <div>
            <p><a href='/players/player_create/{{ $community->id }}'>プレイヤー登録</a></p>
        </div>
            <a href="/communities/community_index">戻る</a>
        </div>
@endsection