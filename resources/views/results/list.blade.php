<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>home</title>
        <!-- Fonts -->
        <link href="https:">//fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h2>result一覧</h2>
            @foreach ($results as $result)
                <p></p>
                <a href="results/{{ $result->id }}">result ID: {{ $result->id }}</a>
                <a href="communities/{{ $result->community->id }}">コミュニティ名：{{ $result->community->name }}</a>
                <p>参加者
                    @foreach($result->players as $player)
                        :{{ $player->name }}
                    @endforeach
                </p>
                <p>勝者:{{ $result->winner }}</p>
                </div>
            @endforeach
    </body>
