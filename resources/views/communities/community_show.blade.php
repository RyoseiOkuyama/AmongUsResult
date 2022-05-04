@extends('header')
    
@section('content')
    <div class="contents">
            
        <div class='community-name'>
            <h1>{{ $community->name }}</h1>
        </div>
        <div class="community-body">
            <p>{{ $community->body }}</p>
        </div>
        <div class="community-results">
            <div class="total-matchs">
                <h2>コミュニティ全体試合数</h2>
                <h2>{{ $community->results->count() }}試合</h2>
            </div>
            <div class="winner">
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
            <div class="winner">
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
                                $player_clues_match = $player->getResults(['sheriff', 'clue'], $player->id)->count();
                                $player_clues_win = $player->getResults(['sheriff', 'clue'], $player->id)->where('results.winner', 'clue')
                                ->count();
                                $player_impostors_match = $player->getResults(['impostor', 'madmate'], $player->id)->count();
                                $player_impostors_win = $player->getResults(['impostor', 'madmate'], $player->id)->where('results.winner', 'impostor')
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
            <p class=><a href='/regulations/regulation_create/{{ $community->id }}'>レギュレーション登録</a></p>
        </div>
        <div>
            <p><a href='/players/player_create/{{ $community->id }}'>プレイヤー登録</a></p>
        </div>
        <div class="back">
            <a href="/communities/community_index">戻る</a>
        </div>
@endsection