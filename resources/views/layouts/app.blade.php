<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <link rel="stylesheet" href="{{ asset('app.css') }}">

</head>
<body>

    <header>
        <h1>My App</h1>
        <nav>
            <a href="{{ route('categories.index') }}">Categories</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>
