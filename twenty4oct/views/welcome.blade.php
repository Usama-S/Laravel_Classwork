<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <style>
            .header, .footer {
                width: 100%;
                background-color: black;
                color: white;
                text-align: center;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="header" style="margin-bottom: 20px">
            <h1>Header</h1>
        </div>
        <div style="text-align: center">
            <div style="margin-bottom: 20px;">
                <a href="/home">Home</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
                @if (session('name'))
                    <a href="/logout">Logout</a>
                @endif
            </div>
            @yield('content')
        </div>
        <div class="footer" style="margin-top: 20px">
            <h1>Footer</h1>
        </div>
    </body>
</html>
