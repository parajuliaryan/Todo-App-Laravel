<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Todo App</title>

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"
            rel="stylesheet"
        />
        <link rel="stylesheet"  href="{{ asset('css/style.css') }}" />

        <!-- Styles -->
        <style>
            body {
                font-family: "Nunito", sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div
            class="
                relative
                flex
                items-top
                justify-center
                min-h-screen
                bg-gray-100
                dark:bg-gray-900
                sm:items-center
                py-4
                sm:pt-0
            "
        >
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                <a
                    href="{{ url('/dashboard') }}"
                    class="text-sm text-gray-700 underline"
                    >Dashboard</a
                >
                @else
                <a
                    href="{{ route('login') }}"
                    class="hyper-link"
                    >Log in</a
                >

                @if (Route::has('register'))
                <a
                    href="{{ route('register') }}"
                    class="hyper-link"
                    >Register</a
                >
                @endif @endauth
            </div>
            @endif
        </div>
    </body>
</html>
