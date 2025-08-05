<!DOCTYPE html>
<html lang="en">
        @vite('resources/css/app.css')
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

</head>
<body class="bg-gray-100 font-sans">

    <div class="container mx-auto p-6">
        {{-- konten halaman masuk ke sini --}}
        @yield('content')
    </div>

</body>
</html>
