<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:wght@400;500;600&display=swap"
            rel="stylesheet">
        @vite(['resources/js/app.js'])
        <title>Document</title>
    </head>
    <body class="bg-black text-white font-hanken-grontesk pb-20">
        <nav class="flex flex-row justify-between items-center px-10 py-3 border-b border-white/10 pb-3">
            <div>
                <a href="/">
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="">
                </a>
            </div>
            <div class="flex flex-row gap-x-6 items-center font-bold">
                <x-nav href="/" :active="request()->is('/')"> jobs </x-nav>
                <x-nav href="#"> Careers </x-nav>
                <x-nav href="#"> Salaries </x-nav>
                <x-nav href="#"> Companies </x-nav>
            </div>
            <div>
                @auth
                    <div class="flex flex-row gap-x-6 items-center font-bold">
                        <x-nav href="/job/create" :active="request()->is('job/create')"> Post a job </x-nav>


                        <form action="/logout" method="post"  class="inline-flex">
                            @csrf
                            @method('delete')
                            <button  class='transition duration-300 hover:text-blue-600'> logout </button>
                        </form>

                    </div>
                @endauth
                @guest
                        <div class="flex flex-row gap-x-6 items-center font-bold">
                            <x-nav href="/register" :active="request()->is('register')" > Signup </x-nav>
                            <x-nav href="/login" :active="request()->is('login')" > Login </x-nav>
                        </div>
                @endguest
            </div>
        </nav>
        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </body>
</html>
