<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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
        <p class="LilitaOne text-6xl text-theme-sub text-center mt-3">Care</p>
        <div class="grid grid-cols-12 gap-4 mt-5 mx-5">
            <a href="{{ route('meal.index') }}" class="col-span-12 xl:col-span-4 CherryBombOne text-4xl text-theme-sub p-10 xl:p-20 bg-theme-third text-center">ごはん</a>
            <a href="{{ route('weight.index') }}" class="col-span-12 xl:col-span-4 CherryBombOne text-4xl text-theme-sub p-10 xl:p-20 bg-theme-third text-center">たいじゅう</a>
            <a href="{{ route('poo.index') }}" class="col-span-12 xl:col-span-4 CherryBombOne text-4xl text-theme-sub p-10 xl:p-20 bg-theme-third text-center">うんち</a>
        </div>
    </body>
</html>
