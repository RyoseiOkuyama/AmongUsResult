<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>CreatePlayer</title>
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
            <form action='/players/created' method="POST">
                @csrf
                <h1>名前を入力してください</h1>
                    <input type='text' name="player[name]">
                <h1>色を選択してください</h1>
                    @php $colors = [
                    'ff0000' => '赤', '000000' => '黒', 'ffffff' => '白', 'D34778' => 'バラ', '0000ff' => '青', '00ffff' => '水', 'ffff00' => '黄', 'ff00ff' => 'ピンク', '800080' => '紫', 
                    '008000' => '緑', 'ffa500' => 'オレンジ', 'ffdb2b' => 'バナナ', 'ff7f50' => 'コーラル(サンゴ)', '00ff00' => '黄緑', '808080' => 'グレー(灰)', '800000' => 'あずき', 'a52a2a' => '茶', '6F4B3E' => 'タン(淡茶)',
                    ];
                    @endphp
                    <select name="player[color]">
                        @foreach ($colors as $color => $color_name)
                            <option value={{ $color }}>{{ $color_name }}色</option>
                        @endforeach
                    </select>
                <input type="hidden" name="player[community_id]" value={{ $community->id }}>
                <input type="submit" value="保存"/>
            </form>
            <div class="footer">
                <a href="/communities/{{ $community->id }}">戻る</a>
            </div>
        </div>
    </body>
</html>