@extends('components.nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-cover bg-center" style="background-image: url('https://unej.ac.id/wp-content/uploads/2023/07/bgheaderunej.webp');">
    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md mx-auto mt-32 md:mt-40">
        <h2 class="text-2xl font-bold text-center mb-6">LOGIN</h2>
        <form action="/login" method="POST" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required
                    class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none 
                           focus:ring-2 focus:ring-indigo-400 focus:border-transparent">
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password" required
                    class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none 
                           focus:ring-2 focus:ring-indigo-400 focus:border-transparent">
            </div>

            <div class="space-y-2">
                <button type="submit" 
                    class="w-full bg-indigo-600 text-white py-2 rounded-md hover:bg-indigo-700">
                    Login
                </button>
                <a href="/register" 
                    class="w-full block text-center bg-gray-300 text-gray-700 py-2 rounded-md hover:bg-gray-400">
                    Register
                </a>
            </div>
        </form>
    </div>
    @include('partials.footer')

</body>
</html>