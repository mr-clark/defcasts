<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Defcasts</title>

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container mx-auto">
            <nav class="mt-6 flex justify-between items-center flex-col text-center sm:flex-row sm:text-left">
                <div class="logo">
                    <a href="/">cd ~/DEFCASTS</a>
                </div>
                <div class="w-1/2">
                    <input class="search" id="search" type="text" value="Search...">
                </div>
                @if(Auth::guest())
                <div class="guest-nav">
                    <a href="#">SIGN UP</a>
                    <a href="#">SIGN IN</a>
                </div>
                @elseif(Auth::check())
                    
                @endif
            </nav>
        </div>
    </body>
</html>
