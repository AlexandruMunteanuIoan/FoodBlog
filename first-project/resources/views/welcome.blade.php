<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/style/style.css')}}">
    <title>Culinary World</title>
</head>
<body>
    <div class="nav-bar">
        <nav>
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('blog')}}">Blogs</a>
            <a href="{{route('create')}}">New blog</a>
        </nav>
    </div>
    @yield('content')
</body>
</html>
