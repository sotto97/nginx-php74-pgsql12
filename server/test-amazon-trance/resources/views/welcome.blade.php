<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CoffeE</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <!-- Scripts -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="bg-white py-6 sm:py-8 lg:py-12">
        <div class="mx-auto px-4 md:px-8">
            <div class="mx-auto flex flex-col items-center text-center">
                <p class="font-semibold text-yellow-500 md:text-lg xl:text-xl">Proud to introduce</p>
                <h1 class="text-black-800 text-3xl font-bold sm:text-4xl md:text-5xl">
                    SCS CoffeE Lab.
                </h1>
                <img src="{{ asset('img/coffee-cup-to-go.png') }}" alt="" class="w-1/4 mb-4">
                {{-- <div class="flex w-full justify-center my-4"> --}}
                <div class="grid grid-rows-2 grid-flow-col gap-4">

                    <div class="flex">
                        <div class="w-2/3 bg-yellow-500 hover:bg-yellow-600 transition text-white px-8 py-4 rounded-lg">
                            <a href="{{ route('login') }}" class="">
                                LOGIN
                            </a>
                        </div>
                        <a class="w-10 mx-4"></a>
                        <div class="w-2/3 bg-yellow-500 hover:bg-yellow-600 transition text-white px-8 py-4 rounded-lg">
                            <a href="{{ route('register') }}" class="">REGISTER</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
