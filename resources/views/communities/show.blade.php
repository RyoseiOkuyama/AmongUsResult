<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CommunityDetail</title>
        <!-- Fonts -->
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="header">
                <figure class="logo">
                    <a href='/'>
                        <image src="/images/among us.webp" height="100" alt="among us ロゴ"></image>
                    </a>
                </figure>
                <a href='/results/create1' class='header-link'><p>戦績登録</p></a>
                <a href='/communities/index' class='header-link'><p>コミュニティ一覧</p></a>
                <a href='/communities/create' class='header-link'><p>コミュニティ作成</p></a>
            </div>
        </header>
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
                    @endphp
                    <h3>{{ $community_clues_win }}%</h3>
                </div>
                <div class="percent_winner">
                    <h2>インポスター勝率</h2>
                    @php
                    if($community->results->where("winner", "impostor")->count() != 0){
                        $community_impostors_win = floor($community->results->where("winner", "impostor")->count() / $community->results->count() * 100);
                    } else {
                        $community_impostors_win = 0;
                    }
                    @endphp
                    <h3>{{ $community_impostors_win }}%</h3>
                </div>
                
                
                
                
            </div>
            <div class="community_players">
                <h2>所属プレイヤー</h2>
                @foreach($community->players as $player)
                    <ul class="player_informations">
                        <li>名前:<a style="color:{{ $player->color }};" href="/players/{{ $player->id }}">{{ $player->name }}</a></li>
                        <li>試合数:{{ $player->results->count() }}</li>
                        @php 
                        if($player->results->count() != 0){
                            $clues_win = floor($player->results->where('winner', 'clue')->count() / $player->results->count() * 100);
                        } else {
                            $clues_win = 0;
                        }
                        $test = $player_results->where("player_id", $player->id)->whereIn("role", ["clue", "sheriff"])->count();
                        @endphp
                        <li>クルー陣営勝率:{{ $clues_win }}%</li>
                        <li>インポスター陣営勝率:{{ $test }}</li>
                    </ul>
                @endforeach
            </div>
             
            <div>
                <p><a href='/regulations/create/{{ $community->id }}'>レギュレーション登録</a></p>
            </div>
            <div>
                <p><a href='/players/create/{{ $community->id }}'>プレイヤー登録</a></p>
            </div>
        
        </div>
        <div class="footer">
            <a href="/communities/index">戻る</a>
        </div>
        
    </body>
</html>