<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite('resources/css/app.css')

    {{-- Alphine JS --}}
    <script src="//unpkg.com/alpinejs" defer></script>
    
    {{-- Style Swipe Card --}}
    <style>
    swiper-slide {
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 18px;
      font-size: 22px;
      font-weight: bold;
      color: #fff;
    }

    </style>

</head>
<body>

    {{-- Navbar --}}
    <nav class="py-6 px-4 bg-gradient-to-r from-purple-500  to-orange-400" x-data="{navOpen : true}">
         <x-navbar-landing/>
    </nav>

    {{-- Content-1 | Penjelasan Audio Book --}}
    <div class="w-full h-full bg-red-200">
        @yield('content')
    </div>
    
    {{-- Content-2 --}}
    <div class="h-full py-4">
        @yield('content-2')
    </div>
    {{-- Content-3 --}}
    <div class="h-full py-4">
        @yield('content-3')
    </div>
    {{-- Content-4 --}}
    <div class="h-full py-4">
        @yield('content-4')
    </div>

    {{-- Footer --}}
    <div>
        <x-footer-landing/>
    </div>

    {{-- Icons --}}
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    {{-- Swiper.js --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>

</body>
</html>