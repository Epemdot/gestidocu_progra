<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Styles -->
    <style>
        body {
            font-family: 'Jura', sans-serif;
            background:
                url('/images/fondototal.jpg') center;

        }
    </style>
</head>

<body class="antialiased">
    <div class="flex flex-col justify-center items-center h-screen bg-secundario">


        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="flex justify-center">
                <img src="/images/logotipo1.png" alt="">
            </div>

            <div class="mt-16 flex justify-center">
                <div class="md:grid-cols-2 gap-6 lg:gap-8">

                    @if (Route::has('login'))
                        @auth
                        <a href="{{ route('login') }}"
                        class="scale-100 p-6 bg-[#76abae] from-gray-700/50 rounded-lg flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-[#76abae] hover:bg-[#eeeeee]">
                        <div class="flex flex-col justify-center items-center">

                            <div class="h-16 w-16 bg-[#222831] items-center justify-center rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#76abae" class="size-16">
                                    <path d="M11.47 3.841a.75.75 0 0 1 1.06 0l8.69 8.69a.75.75 0 1 0 1.06-1.061l-8.689-8.69a2.25 2.25 0 0 0-3.182 0l-8.69 8.69a.75.75 0 1 0 1.061 1.06l8.69-8.689Z" />
                                    <path d="m12 5.432 8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 0 1-.75-.75v-4.5a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75V21a.75.75 0 0 1-.75.75H5.625a1.875 1.875 0 0 1-1.875-1.875v-6.198a2.29 2.29 0 0 0 .091-.086L12 5.432Z" />
                                  </svg>
                                  
                                  
                            </div>

                            <h2 class="mt-6 text-xl font-semibold text-gray-900">Portal de Usuario</h2>

                        </div>
                    </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="scale-100 p-6 bg-[#76abae] from-gray-700/50 rounded-lg flex motion-safe:hover:scale-[1.05] transition-all duration-250 focus:outline focus:outline-2 focus:outline-[#76abae] hover:bg-[#eeeeee]">
                                <div class="flex flex-col sm:justify-center items-center">

                                    <div class="h-16 w-16 bg-[#222831] flex items-center justify-center rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#76abae" class="size-16">
                                            <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0 0 21.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 0 0 3.065 7.097A9.716 9.716 0 0 0 12 21.75a9.716 9.716 0 0 0 6.685-2.653Zm-12.54-1.285A7.486 7.486 0 0 1 12 15a7.486 7.486 0 0 1 5.855 2.812A8.224 8.224 0 0 1 12 20.25a8.224 8.224 0 0 1-5.855-2.438ZM15.75 9a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0Z" clip-rule="evenodd" />
                                          </svg>
                                          
                                    </div>

                                    <h2 class="mt-6 text-xl font-semibold text-gray-900">Inicio de Sesión</h2>

                                </div>
                            </a>
                    </div>
                </div>
            @endauth
            @endif

            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                <div class="text-center text-sm sm:text-left">
                    &nbsp;
                </div>

                <div class="text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                </div>
            </div>
        </div>
    </div>
</body>

</html>
