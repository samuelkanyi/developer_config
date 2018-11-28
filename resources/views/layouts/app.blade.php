<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" >-->
        <!--<link rel="stylesheet" href="https://unpkg.com/picnic">-->
        <!-- Styles -->

    </head>
    <body>
        
            @yield('content')
    </body>
</html>
