<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="">
    @include('layouts.alert')
    <div class="top-1 flex justify-between px-20 bg-blue-700 text-white py-2 z-10 mb-2">
        <div>
            <a href="" class="sm:block hidden ri-phone-fill"> 9765660867</a>
        </div>
        <div>
            @auth
                <a href="" class="text-black font-bold">Hi , <i
                        class="ri-user-line"></i>{{ auth()->user()->name }}</a>
                <a href="{{ route('mycart') }}" class="p-2 text-black font-bold"><i class="ri-shopping-cart-fill"></i>My
                    Cart</a>
                <form action="{{ route('logout') }}" method="post" class="inline">
                    @csrf
                    <button type="submit" class="p-2 font-bold text-black"><i
                            class="ri-logout-box-line"></i>Logout</button>
                </form>
            @else
                <a href="/login" class="p-2 hover:text-blue-500">Login</a>
            @endauth
        </div>
    </div>
    <nav class="lg:flex hidden justify-between sticky z-11 top-0 items-center px-20 py-5 shadow-md bg-gray-300 ">
        <div>
            <img src="{{ asset('logo.png') }}" class="w-12" alt="">
        </div>
        <div class="sticky top-0 font-bold">
            <a href="{{ route('home') }}" class="p-2"> Home </a>
            @php
                $categories = App\models\Category::orderBy('priority')->get();
            @endphp
            @foreach ($categories as $category)
                <a href="{{ route('categoryproduct', $category->id) }}" class="p-2">{{ $category->name }}</a>
            @endforeach
        </div>
    </nav>
    <nav class="lg:hidden block  sticky z-11 top-0 items-center px-20 py-5 shadow-md bg-gray-300 ">
        <div class="flex justify-between items-center">
            <img src="{{ asset('logo.png') }}" class="w-12" alt="">
            <i class="ri-menu-3-line text-2xl border p-4 rounded-lg" onclick="toggleMenu()"></i>
        </div>
        <div class=" hidden mt-4 sticky top-0 font-bold" id="mob-menu">
            <a href="{{ route('home') }}" class="p-2"> Home </a>
            @php
                $categories = App\models\Category::orderBy('priority')->get();
            @endphp
            @foreach ($categories as $category)
                <a href="{{ route('categoryproduct', $category->id) }}" class="p-2">{{ $category->name }}</a>
            @endforeach
        </div>
    </nav>

    @yield('content')
    <footer>
        <div class = "grid md:grid-cols-4 sm:gird-cols-2 px-20 gap-10 bg-lime-200 py-10">
            <div>
                <h2 class = "text-2l font-bold">LOGO</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas quae sequi a
                    dignissimos dolorum excepturi ut, quaerat qui in soluta officiis perspiciatis, quos inventore
                    necessitatibus sed.
                    Ad iste cupiditate rerum!</p>
            </div>
            <div>
                <h2 class = "text-2xl font-bold"> Quick Links </h2>
                <ul>
                    <li><a href="" class="p-2"> Home </a>
                    <li><a href="" class="p-2"> About </a>
                    <li><a href="" class="p-2"> Contact </a>
                    <li><a href="" class="p-2"> Login </a>
                </ul>
            </div>
            <div>
                <h2 class = "text-2xl font-bold"> Contact Us </h2>
                <p> Email : test@gmail.com<br> Phone: 9742538007</p>
                <p> Adresss: 123, <br>
                    Chitwan <br>
                    Nepal
                </p>
            </div>
            <div>
                <h2 class = "text-2xl font-bold">Social Links</h2>
                <ul>
                    <li><a href=""> Facebook </a> </li>
                    <li><a href=""> Twitter </a> </li>
                    <li><a href=""> Instagram </a> </li>
                    <li><a href=""> LinkedIn </a> </li>
                </ul>
            </div>
        </div>
        <div class = "bg-blue-500 text-white text-center py-5">
            <p> &copy; 2021 All rights reserved </p>
        </div>
    </footer>
    <script>
        function toggleMenu() {
            let menu = document.getElementById('mob-menu');
            if (menu.classList.contains('hidden'))
             {
                menu.classList.remove('hidden');
                menu.classList.add('grid');
            } else {
                menu.classList.add('hidden');
                menu.classList.remove('grid');
            }
        }
    </script>


</body>

</html>
