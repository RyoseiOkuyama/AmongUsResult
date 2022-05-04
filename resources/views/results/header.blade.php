<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Among Us Result</title>
        <!-- Fonts -->
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <div class="header">
                <figure>
                    <a href='/'>
                        <image src="/images/among us.webp" class='logo' alt="among us ロゴ"></image>
                    </a>
                </figure>
                <p><a href='/results/result_create1' class='header_link'>戦績登録</a><p>
                <p><a href='/communities/community_index' class='header_link'>コミュニティ一覧</a></p>
                <p><a href='/communities/community_create' class='header_link'>コミュニティ作成</a></p>
                @guest
                    <p><a class="user_link" href="{{ route('login') }}">ログイン</a></p>
                    @if (Route::has('register'))
                        <p><a class="user_link" href="{{ route('register') }}">ユーザー登録</a></p>
                    @endif
                    @else
                        <div>
                            <a class="user_link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                ログアウト
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                        <p><a class="user_link" id="user_name" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a></p>
                @endguest
            </div>
        </header>
        <div class='main'>
            @yield('content')
            
        </div>
        
        
        
                
    </body>
</html>