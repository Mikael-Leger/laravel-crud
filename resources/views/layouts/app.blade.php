<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <title>Laravel CRUD</title>
</head>
<body>
    <header>
        <h1>Laravel CRUD Application</h1>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>