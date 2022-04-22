<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ShowRegulation</title>
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
            <h1 class="title">
                {{ $regulation->id }}
            </h1>
            <div class="des_regulation">
                <p>合計人数:{{ $regulation->allnumber }}人</p>
                <p>クルーの人数:{{ $regulation->cluenumber }}人</p>
                <p>シェリフの人数:{{ $regulation->sheriffnumber }}人</p>
                <p>マッドメイトの人数:{{ $regulation->madmatenumber }}人</p>
                <p>インポスターの人数:{{ $regulation->impostornumber }}人</p>
                <p>コミュニティID:{{ $regulation->community_id }}</p>
            </div>
        </div>
        </div>
        
        <div class="footer">
            <a href="/communities/index">戻る</a>
        </div>
    </body>
</html>