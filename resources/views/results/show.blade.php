<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ShowResult</title>
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
        
        <div class='contents'>
            <h1 class="title">{{ $result->id }}</h1>
            <div class="des_results">
                <p>{{ $result->community_id }}</p>
                <p>{{ $result->winner }}</p>
                <p>参加者
                    @foreach($result->players as $player)
                        :{{ $player->name }}
                    @endforeach
                </p>
            </div>
        </div>
    </body>
</html>