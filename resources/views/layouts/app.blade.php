<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Care</title>

        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('image/favicon.svg') }}">

        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&family=Kosugi+Maru&family=Lilita+One&display=swap" rel="stylesheet">

        <!-- LINE AWESOME -->
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/sass/theme.scss'])
    </head>
    <body>
        <div>
            <!-- ナビゲーションメニュー -->
            @include('layouts.navigation')
            <!-- ページコンテンツ -->
            <main class="mx-0 xl:mx-5">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
