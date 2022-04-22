<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ResultCreate1</title>
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
            <h1>戦績登録</h1>
                <div class="title">
                    <form name='form'>
                        <h2>コミュニティを選択してください</h2>
                            <select class='select-community' id='community' name='community'>
                                @foreach ($communities as $community)
                                    <option value={{ $community->id }} >{{ $community->name }}</option>
                                @endforeach
                            </select>
                        <h2>レギュレーションを選択してください</h2>
                            <select class="used-regulation" name="result[used_regulation]" id='regulation'>
                                @foreach ($regulations as $regulation)
                                    <option value={{ $regulation->id }} @if(old('regulation_id') == $regulation->id) selected @endif>{{ $regulation->id }}</option>
                                @endforeach
                            </select>
                    </form>
                    <button onclick="select_community()">保存</button>
                </div>
                <script>
                function select_community() {
                    const community = document.form.community;
                    const number1 = community.selectedIndex;
                    const community_id = community.options[number1].value;
                    const regulation = document.form.regulation;
                    const number2 = regulation.selectedIndex;
                    const used_regulation = regulation.options[number2].value;
                    window.location.href = url = '/results/create2/' + community_id + '/' + used_regulation;
                };
                </script>
        
            <div class="back">[<a href="/">back</a>]</div>
        </div>
            
        
    </body>
</html>