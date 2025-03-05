<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Laravel CRUD</title>
</head>
<body>
    <header>
        <div class="container-centered">
            <h1>Laravel CRUD Application</h1>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    @livewireScripts
    @vite('resources/js/app.js')
</body>
</html>