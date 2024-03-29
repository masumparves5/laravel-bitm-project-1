<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("/")}}css/bootstrap.css">
    <title>@yield('bitm')</title>
</head>
<body>

<nav class="navbar navbar-expand navbar-light, bg-light">
    <div class="container">
        <a href="" class="navbar-brand">LOGO</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li><a href="{{route('about')}}" class="nav-link">About</a></li>
            <li><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
            <li><a href="{{route('series')}}" class="nav-link">Series</a></li>
            <li><a href="" class="nav-link">Others</a></li>
        </ul>
    </div>
</nav>

@yield('body')



<script src="{{asset("/")}}js/bootstrap.bundle.js"></script>


</body>
</html>
