<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master 1</title>
    <style>
        .container{
            margin: 20px;
        }
        .wl{
            text-align: center;
        }
        .my-nav{
            text-align: center;
            background-color: black;
            padding: 5px;
        }

        .my-nav ul li{
            display: inline;
            text-decoration: none;
            margin: 5px;
        }
        a{
            color: white;
            text-decoration: none;
            font-size: 1.2em;

        }
        a:hover{
            color: greenyellow;
            font-weight: bolder;
        }
        .div{
            border-left:2px solid white ;
        }
    </style>
    @yield('style')
</head>
<body>
<div class="container">

<div class="my-nav">
    <ul>
        <li><a href="/">Home</a></li>
        <li class="div"></li>
        <li><a href="/todo">Todo App</a></li>
    </ul>
</div>
<h1 class="wl">WELCOME TO LARAVEL </h1>
@yield('childinfo here')

</div>
</body>
</html>
