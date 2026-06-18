<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Todo App</title>
</head>
<body>
    <h1>My Todo Application</h1>
    <hr>
    @include('partials.flash-message')
    @include('partials.navbar')
    @yield('content')
</body>
</html>