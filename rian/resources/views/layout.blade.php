<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MyWeb')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col min-h-screen">

    @include('navbar')

    <main class="flex-grow container mx-auto mt-6 px-4">
        @yield('content')
    </main>

    @include('footer')

</body>
</html>