<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        <nav>
            <ul>
                <li><a href="{{route('main.index')}}">Main</li>
                <li><a href="{{route('post.index')}}">Posts</li>
                <li><a href="{{route('about.index')}}">About</li>
                <li><a href="{{route('contact.index')}}">Contacts</li>
            </ul>
        </nav>
    </div>
    @yield('content')
</div>
</body>
</html>