<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <div class='posts'>
            @foreach ($Communities as $community)
                <div class='community'>
                    <h2 class='a'>{{ $community->id }}</h2>
                    <p class='body'>{{ $community->name }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>