<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ShowPlayer</title>
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/style.php" rel="stylesheet">
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
            <div class="">
                <style>
                    
                </style>
                <p style="color:#{{ $player->color }};" class='player_name'>名前:{{ $player->name }}</p>
                <p>{{ $player->color }}</p>
                <p>総試合数:{{ $player->results->count() }}試合</p>
                <p>{{ $player->results->where('winner', 'clue')->count() }}</p>
                @php 
                if($player->results->count() != 0){
                    $clue_win = floor($player->results->where('winner', 'clue')->count() / $player->results->count() * 100);
                } else {
                    $clue_win = 0;
                }
                @endphp
                <p>クルー勝率:{{ $clue_win }}% </p>
            </div> 
        </div>
        <div class="footer">
            <a href="/communities/{{ $player->community_id }}">戻る</a>
        </div>
    </body>
</html>