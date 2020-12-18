<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>limited time</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">

</head>

<body>
    <div id="app">
        <header>
            @guest
            <a class="title" href="/">LIMITED TIME</a>
            <nav id="nav">
                <ul>
                    <li><a href="{{ route('login') }}">{{ __('ログイン') }}</a></li>
                    @if (Route::has('register'))
                    <li><a href="{{ route('register') }}">{{ __('新規登録') }}</a></li>
                    @endif
                </ul>
            </nav>
            <div id="hamburger">
                <span class="inner_line" id="line1"></span>
                <span class="inner_line" id="line2"></span>
                <span class="inner_line" id="line3"></span>
            </div>
            @else
            <a class="title" href="/">LIMITED TIME</a>
            <nav id="nav">
                <ul>
                    <li><a href="#">今日</a></li>
                    <li><a href="#">今月</a></li>
                    <li><a href="#">タイマー</a></li>
                    <li><a href="#">自分の記録</a></li>
                    <li><a href="#">他の人の記録</a></li>
                    <li><a href="#">投稿</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">{{ __('ログアウト') }}</a></li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </ul>
            </nav>
            <div id="hamburger">
                <span class="inner_line" id="line1"></span>
                <span class="inner_line" id="line2"></span>
                <span class="inner_line" id="line3"></span>
            </div>
            @endguest
        </header>
        <main class="py-4">
            @yield('content')
        </main>

    </div>
</body>

</html>