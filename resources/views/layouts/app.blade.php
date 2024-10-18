<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen">
    @include('components.nav')
    
    <div class="flex-grow container mx-auto py-8">
        @yield('content')
    </div>

    @include('partials.footer')

</body>
</html>
