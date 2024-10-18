@extends('layouts.app')

@section('title', 'Homepage')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Contact List</h1>

    <table class="table-auto w-full bg-white shadow-md rounded-lg">
        <thead>
            <tr class="bg-indigo-600 text-white">
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Role</th>
                <th class="px-4 py-2">Email</th>
            </tr>
        </thead>
        <tbody>
            @php
                $faker = Faker\Factory::create();
                $roles = ['Student', 'Staff', 'Lecturer'];
            @endphp

            @for($i = 0; $i < 10; $i++)
                <tr class="border-b">
                    <td class="px-4 py-2">{{ $faker->name }}</td>
                    <td class="px-4 py-2">{{ $roles[array_rand($roles)] }}</td>
                    <td class="px-4 py-2">{{ $faker->email }}</td>
                </tr>
            @endfor
        </tbody>
    </table>
@endsection
