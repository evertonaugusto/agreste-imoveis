<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @livewireScripts
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <nav class="bg-orange-500 h-16">
        <div class="max-w-7xl h-full mx-auto flex justify-between items-center px-10">
            <div>LOGO</div>
            <div class="flex gap-5 items-center">
                <div class="text-white px-4 py-2 hover:rounded-full hover:bg-orange-400 cursor-pointer">
                    <a href="#quem_somos">QUEM SOMOS</a>
                </div>
                <div class="bg-white text-orange-500 px-4 py-2 rounded-full hover:bg-gray-100 cursor-pointer">ANUNCIAR</div>
                <div class="text-white p-2 hover:rounded-full hover:bg-orange-400 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                    </svg>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')
    @livewireScripts
</body>
</html>