@extends('header')

@section('content')
    <div class='contents'>
        
        <div class='result_name'>
            <h1>戦績一覧</h1>
            @if($user !== null)
            <h2>{{ $user->name }}</h2>
        </div>
        <div class="">
            <table class="player_informations" border="1">
                <tr>
                    <th>試合数</th><th>クルー勝率</th><th>インポスター勝率</th><th>クルー率</th><th>シェリフ率</th><th>マッドメイト率</th><th>インポスター率</th>
                <tr>
                <tr>
                    @php
                        $matchs = 0;
                        $clues_matchs = 0;
                        $clue_matchs = 0;
                        $sheriff_matchs = 0;
                        $clues_wins = 0;
                        $impostors_matchs = 0;
                        $madmate_matchs = 0;
                        $impostor_matchs = 0;
                        $impostors_wins = 0;
                        
                    @endphp
                        @foreach($players->where('user_id', $user->id) as $userplayer)
                        @php
                            $match = $userplayer->results->count();
                            $matchs = $matchs + $match;
                            $clues_match = $userplayer->getResults(['sheriff', 'clue'], $userplayer->id)->count();
                            $clue_match = $userplayer->getResult("clue", $userplayer->id)->count();
                            $sheriff_match = $userplayer->getResult("sheriff", $userplayer->id)->count();
                            $clues_win = $userplayer->getResults(['sheriff', 'clue'], $userplayer->id)->where('results.winner', 'clue')
                            ->count();
                            $impostors_match = $userplayer->getResults(['impostor', 'madmate'], $userplayer->id)->count();
                            $madmate_match = $userplayer->getResult("madmate", $userplayer->id)->count();
                            $impostor_match = $userplayer->getResult("impostor", $userplayer->id)->count();
                            $impostors_win = $userplayer->getResults(['impostor', 'madmate'], $userplayer->id)->where('results.winner', 'impostor')
                            ->count();
                            $clues_matchs = $clues_matchs + $clues_match;
                            $clues_wins = $clues_wins + $clues_win;
                            $impostors_matchs = $impostors_matchs + $impostors_match;
                            $impostors_wins = $impostors_wins + $impostors_win;
                            $clue_matchs = $clue_matchs + $clue_match;
                            $sheriff_matchs = $sheriff_matchs + $sheriff_match;
                            $madmate_matchs = $madmate_matchs + $madmate_match;
                            $impostor_matchs = $impostor_matchs + $impostor_match;
                        @endphp
                        @endforeach
                        @php
                            if($clues_wins != 0){
                                $clues_wins = floor($clues_wins / $clues_matchs * 100);
                            } else {
                                $clues_wins = 0;
                            }
                            if($impostors_wins != 0){
                                $impostors_wins = floor($impostors_wins / $impostors_matchs * 100);
                            } else {
                                $impostors_wins = 0;
                            }
                            $clue_matchs = floor($clue_matchs / $matchs * 100);
                            $sheriff_matchs = floor($sheriff_matchs / $matchs * 100);
                            $madmate_matchs = floor($madmate_matchs / $matchs * 100);
                            $impostor_matchs = floor($impostor_matchs / $matchs * 100);
                        @endphp
                    <td>{{ $matchs }}試合</td>
                    <td>{{ $clues_wins }}%</td>
                    <td>{{ $impostors_wins }}%</td>
                    <td>{{ $clue_matchs }}%</td>
                    <td>{{ $sheriff_matchs}}%</td>
                    <td>{{ $madmate_matchs}}%</td>
                    <td>{{ $impostor_matchs}}%</td>
                </tr>
            </table>
        </div>
        @endif
    </div>
@endsection