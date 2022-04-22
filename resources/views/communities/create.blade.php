<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>CommunityCreate</title>
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
            <form action='/communities/created' method="POST">
                @csrf
                <div class="title">
                    <h2>コミュニティの名前を入力してください<span>必須項目</span></h2>
                    <input type="text" name="community[name]" placeholder="名前"/>
                </div>
                <div class="body">
                    <h2>コミュニティの説明を入力してください</h2>
                    <textarea name="community[body]" placeholder="コミュニティの説明"></textarea>
                </div>
                <div class='image'>
                    <h2>コミュニティのアイコンを選んでください</h2>
                    <input type="file" name="community[image]">
                </div>
                <input type="submit" value="保存"/>
            </form>
        </div>
        
    </body>
</html>