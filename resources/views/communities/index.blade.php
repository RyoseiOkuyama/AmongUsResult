<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>community一覧</h1>
        <div class='posts'>
            @foreach ($communities as $community)
                <div class='community'>
                    <h2 class='id'>{{ $community->id }}</h2>
                    <p class='body'>名前：{{ $community->name }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>