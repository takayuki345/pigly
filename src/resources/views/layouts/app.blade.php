<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <ul class="header-item">
            <li class="header-list">
                <a class="header-logo">PiGLy</a>
            </li>
            <li class="header-list">
                <div class="header-menus">
                    <a class="header-menu__weight-set" href="/weight_logs/goal_setting">目標体重設定</a>
                    <form class="header-menu__logout-form" action="/logout" method="post">
                        @csrf
                        <button class="header-menu__logout">ログアウト</button>
                    </form>
                </div>
            </li>
        </ul>
    </header>
    <main class="main">
        @yield('content')
    </main>
</body>

</html>
