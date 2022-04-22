<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>community</title>
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
        <div class='contents'>
            <h1>community一覧</h1>
                <div class='posts'>
                @foreach ($communities as $community)
                    <p class='id'>{{ $community->id }}</p>
                    <a href='/communities/{{ $community->id }}'  class='body'>{{ $community->name }}</a>
                @endforeach
            </div>
        </div>
        
            
        <div>
            <a href='/'>ホームへ戻る</a>
        </div>
    </body>
</html>
