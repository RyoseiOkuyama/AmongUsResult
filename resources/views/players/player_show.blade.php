@extends('results.result_index')
    
@section('content')
    <div class="contents">
        <div class="">
            <table class="player_informations" border="1">
                <tr>
                    <th>名前</th><th>試合数</th><th>クルー勝率</th><th>インポスター勝率</th>
                </tr>
                <tr>
                    <td><a style="color:{{ $player->color }};" href="/players/{{ $player->id }}">{{ $player->name }}</a></td>
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
            </table>
        </div>
        <div>
            <p><a href='/players/player_user'>ユーザー認証</a></p>
        </div>
        <div class="footer">
            <a href="/communities/{{ $player->community_id }}">戻る</a>
        </div>
    </div>
@endsection