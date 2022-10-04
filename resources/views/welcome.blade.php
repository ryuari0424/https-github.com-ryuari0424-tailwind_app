<!DOCTYPE html>
<html data-theme="cupcake" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <div class="hero min-h-screen relative"
        style="background-image: url(https://as1.ftcdn.net/v2/jpg/01/99/50/80/1000_F_199508014_AWTdIXoUQ4np00Fpogl3YdmnDtUZlnjl.jpg);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
            <div class="max-w-md">
                <h1 class="mb-5 text-5xl font-bold p-2">みんな元気してる？</h1>
                <p class="p-2 mb-5">クソみたいなブログアプリだけどやろうや（Google認証練習用）</p>
                <a href="{{ route('login') }}">
                    <button class="btn btn-info">Log in</button>
                </a>
                <a href="{{ route('register') }}">
                    <button class="btn btn-primary">Register</button>
                </a>


                {{-- 追加 --}}
                <div class="flex items-center justify-end mt-4">
                    <a href="{{ url('auth/google') }}">
                        <img src="https://developers.google.com/identity/images/btn_google_signin_dark_normal_web.png"
                            style="margin-left: 3em;">
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
