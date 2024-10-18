@extends('components.nav')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <title>Registration Page</title>
    
    <style>
        body {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen" style="background-image: url('https://unej.ac.id/wp-content/uploads/2023/07/bgheaderunej.webp');">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
        <h1 class="text-2xl font-bold text-center mb-6">Register Here</h1>

        <form action="/register" method="POST">
            @csrf
            <div class="mb-4">
                <input type="text" class="border border-gray-300 rounded-lg w-full p-2" 
                       name="fullname" placeholder="Full Name" required />
            </div>
            <div class="mb-4">
                <input type="email" class="border border-gray-300 rounded-lg w-full p-2" 
                       name="email" placeholder="Email" required />
            </div>
            <div class="mb-4">
                <input type="text" class="border border-gray-300 rounded-lg w-full p-2" 
                       name="birthplace" placeholder="Place of Birth" required />
            </div>
            <div class="mb-4">
                <input type="date" class="border border-gray-300 rounded-lg w-full p-2" 
                       name="birthdate" required />
            </div>
            <div class="mb-4 flex items-center">
                <input type="checkbox" class="mr-2" name="terms" required />
                <label for="terms" class="text-gray-700">I agree to the Terms and Conditions</label>
            </div>
            <input type="submit" class="bg-green-500 text-white font-semibold py-2 rounded-lg w-full 
                   hover:bg-green-600 transition duration-200" value="Register" />
        </form>
    </div>

    @include('partials.footer')
</body>
</html>
