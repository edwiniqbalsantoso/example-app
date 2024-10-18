<?php

use Illuminate\Support\Facades\Route;
use Faker\Factory as Faker;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('login');
});

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
    return redirect('/home'); 
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', function (Request $request) {
    $request->validate([
        'fullname'   => 'required|string|max:255',
        'email'      => 'required|email|unique:users,email',
        'birthplace' => 'required|string|max:255',
        'birthdate'  => 'required|date',
        'terms'      => 'accepted',
    ]);

    session()->flash('success', 'Akun berhasil dibuat! Silakan login.');

    return redirect('/'); 
});

Route::get('/home', function () {
    $contacts = [];
    $faker = Faker::create();

    for ($i = 1; $i <= 5; $i++) {
        $contacts[] = [
            'name'  => $faker->name,
            'email' => $faker->unique()->safeEmail,
            'phone' => $faker->phoneNumber,
        ];
    }

    return view('homepage', ['contacts' => $contacts]);
});
