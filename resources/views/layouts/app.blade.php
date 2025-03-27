<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HolyBone</title>
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    @vite('resources/css/app.css')
</head>

<body class="flex flex-col min-h-screen bg-white">

    @include('partials.navbar') <!-- Navbar di atas -->

    <main class="flex-grow">
        @yield('content') <!-- Tempat halaman seperti donation.blade.php -->
    </main>

    @include('partials.footer') <!-- Footer di bawah -->
    <script src="https://kit.fontawesome.com/b89938590f.js" crossorigin="anonymous"></script>

</body>

</html>
