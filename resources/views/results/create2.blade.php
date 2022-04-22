<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ResultCreate2</title>
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
            <form action="/results/create3" method="POST">
                @csrf
                
                <h1>参加者は？</h1>
                @foreach ($community->players as $player)
                    <input type='checkbox' name="players_array[]"  value='{{ $player->id }}'>
                        {{ $player->name }}
                    </input>
                @endforeach
                <h1>シェリフは？</h1>
                @foreach ($community->players as $player)
                    <input type='checkbox' name="players_sheriffs[]" value='{{ $player->id }}'>
                        {{ $player->name }}
                    </input>
                @endforeach
                <h1>マッドメイトは？</h1>
                @foreach ($community->players as $player)
                    <input type='checkbox' name="players_madmates[]" value='{{ $player->id }}'>
                        {{ $player->name }}
                    </input>
                @endforeach
                <h1>インポスターは？</h1>
                @foreach ($community->players as $player)
                    <input type='checkbox' name="players_impostors[]" value='{{ $player->id }}'>
                        {{ $player->name }}
                    </input>
                @endforeach
                <h1>勝利したのは？</h1>
                <select name="result[winner]">
                    @php $winners = [
                        'clue' => 'クルー陣営',
                        'impostor' => 'インポスター陣営',
                        ];
                    @endphp
                    
                    @foreach ($winners as $winner => $selected_winner)
                        <option value={{ $winner }}>{{ $selected_winner }}</option>
                    @endforeach
                    
                </select>
                <input type="hidden" name="result[community_id]" value={{ $community->id }}>
                <input type="hidden" name="result[used_regulation]" value={{ $regulation->id }}>
                <input type="submit" value="保存"/>
            </form>
        </div>
            
            
        <div class="back">[<a href="/results/create1">back</a>]</div>
    </body>
</html>