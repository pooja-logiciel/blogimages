<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
</head>
<style>
    body{
        background-image: url('https://images.unsplash.com/photo-1491582325207-80d06869fb3d?dpr=1&auto=compress,format&fit=crop&w=755&h=&q=80&cs=tinysrgb&crop=');
    }
        a {
        text-decoration: none;
    }
    #lo{
        font-size:50px;
        color:#835C3B;
    }
    h2{
        font-size:80px;
        color:#835C3B;
    }
</style>
<body>
    <div style="width:1000px; height:500px;  margin:100px 0px 0px 100px; text-align:center;">
         <form>
            <h2><b>Welcome Page</b></h2>
            @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/index') }}" id ="lo" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                @else
                    <a href="{{ route('login') }}" id ="lo" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
                     <br>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"  id ="lo" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registeration</a>
                    @endif
                @endauth
            </div>
            @endif
         </form>
    </div>
</body>
</html>
