<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Care</title>

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
        <div class="flex justify-around mx-5 mt-5">
            <a href="" class="CherryBombOne text-4xl text-theme-sub p-20 mx-10 bg-theme-third w-80 text-center">ごはん</a>
            <a href="" class="CherryBombOne text-4xl text-theme-sub p-20 mx-10 bg-theme-third w-80 text-center">たいじゅう</a>
            <a href="" class="CherryBombOne text-4xl text-theme-sub p-20 mx-10 bg-theme-third w-80 text-center">かんり</a>
        </div>
    </body>
</html>
