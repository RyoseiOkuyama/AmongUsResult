<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>CreateRegulation</title>
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
            <form action='/regulations/created' method="POST">
                @csrf
                <h1>合計人数を入力してください</h1>
                <select name="regulation[allnumber]">
                    @php
                        $allnumbers = [
                        4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15,
                        ];
                        $cluenumbers = [
                        3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14,
                        ];
                        $sheriffnumbers = [
                        0, 1, 2, 3,
                        ];
                        $madmatenumbers = [
                        0, 1, 2, 3,
                        ];
                        $impostornumbers = [
                        1, 2, 3,
                        ];
                    @endphp
                    @foreach ($allnumbers as $allnumber)
                        <option value={{ $allnumber }}>{{ $allnumber }}人</option>
                    @endforeach
                    
                </select>
                <h2>クルーの人数を選択してください</h2>
                <select name='regulation[cluenumber]'>
                    @foreach ($cluenumbers as $cluenumber)
                        <option value={{ $cluenumber }}>{{ $cluenumber }}人</option>
                    @endforeach
                </select>
                <h2>シェリフの人数を選択してください</h2>
                <select name='regulation[sheriffnumber]'>
                    @foreach ($sheriffnumbers as $sheriffnumber)
                        <option value={{ $sheriffnumber }}>{{ $sheriffnumber }}人</option>
                    @endforeach
                </select>
                <h2>マッドメイトの人数を選択してください</h2>
                <select name='regulation[madmatenumber]'>
                    @foreach ($madmatenumbers as $madmatenumber)
                        <option value={{ $madmatenumber }}>{{ $madmatenumber }}人</option>
                    @endforeach
                </select>
                <h2>インポスターの人数を選択してください</h2>
                <select name='regulation[impostornumber]'>
                    @foreach ($impostornumbers as $impostornumber)
                        <option value={{ $impostornumber }}>{{ $impostornumber }}人</option>
                    @endforeach
                </select>
                <input type="hidden" name="regulation[community_id]" value={{ $community->id }}>
                <input type="submit" value="保存"/>
            </form>
        </div>
            <div class="footer">
                <a href="/communities/{{ $community->id }}">戻る</a>
            </div>
    </body>
</html>