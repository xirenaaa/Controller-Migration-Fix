<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Info Lomba')</title>

    @vite('resources/css/app.css')
</head>

<body class="bg-sky-50 text-gray-700">
    <nav class="bg-sky-600 shadow-lg">
        <div class="container mx-auto px-6 py-4">
            <a href="/" class="text-xl font-bold text-white hover:text-sky-100 transition-colors">
                InfoLomba
            </a>
        </div>
    </nav>

    <main class="container mx-auto mt-10 px-4">
        @yield('content')
    </main>

    <footer class="text-center text-sky-700 mt-12 pb-6">
        <p>&copy; {{ date('Y') }} InfoLomba.</p>
    </footer>
</body>

</html>