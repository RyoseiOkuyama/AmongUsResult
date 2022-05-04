@extends('header')
    
@section('content')
    <div class="contents">
        <div class="">
            <table class="player_informations" border="1">
                <tr>
                    <th>名前</th><th>試合数</th><th>クルー勝率</th><th>インポスター勝率</th>
                </tr>
                <tr>
                    @if($player->user_id ===Null)
                        <td style="color:{{ $player->color }}">{{ $player->name }}</td>
                    @else
                        <td style="color:{{ $player->color }}">{{ $player->user->name }}</td>
                    @endif
                    <td>{{ $player->results->count() }}試合</td>
                        @php
                            $clues_match = $player->getResults(['sheriff', 'clue'], $player->id)->count();
                            $clues_win = $player->getResults(['sheriff', 'clue'], $player->id)->where('results.winner', 'clue')
                            ->count();
                            $impostors_match = $player->getResults(['impostor', 'madmate'], $player->id)->count();
                            $impostors_win = $player->getResults(['impostor', 'madmate'], $player->id)->where('results.winner', 'impostor')
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
            </table>
        </div>
        @if($player::where('community_id', $player->community_id)->where('user_id', Auth::user()->id)->get() == null)
        <div>
            <p><a href='/players/player_link/{{ $player->id }}'>ユーザー認証</a></p>
        </div>
        @endif
        <div class="footer">
            <a href="/communities/{{ $player->community_id }}">戻る</a>
        </div>
    </div>
@endsection