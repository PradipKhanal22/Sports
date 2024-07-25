<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
              rel="stylesheet"/>
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        @include('layouts.alert')
        <div class="flex">
            <div class="w-56 h-screen sticky top-0 bg-gray-400 shadow">
                <img src="https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg" alt="" class="w-8/12 mx-auto mt-5 bg-white p-2 rounded-lg shadow-lg">
                <div class="mt-5">
                    <a href="{{route('dashboard')}}" class="block p-3 text-black
                     hover:bg-gray-300">Dashboard</a>
                    <a href="{{route('categories.index')}}" class="block p-3 text-black   hover:bg-gray-300">Category</a>
                    <a href="{{route('products.index')}}" class="block p-3 text-black hover:bg-gray-300">Product</a>
                    <a href="{{route('brands.index')}}" class="block p-3 text-black hover:bg-gray-300">Brands</a>
                    <a href="{{route('orders.index')}}" class="block p-3 text-black hover:bg-gray-300">Orders</a>
                    <a href="" class="block p-3 text-black hover:bg-gray-300">Users</a>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="block w-full p-3 text-black
                         hover:bg-gray-300 text-left">Logout</button>
                    </form>
                </div>

            </div>
        <div class="p-4 flex-1">
            <h1 class="text-3xl font-bold" >@yield('title')</h1>
            <hr class="h-1 bg-blue-700">
            @yield('content')

        </div>
        </div>

    </body>
</html>
