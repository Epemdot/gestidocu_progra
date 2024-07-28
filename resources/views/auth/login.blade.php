<x-guest-layout>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Jura', sans-serif;
                background: linear-gradient(rgb(118, 171, 174, 0.6), rgb(118, 171, 174, 0.6)),
                  url('/images/login/gestidoc.jpg') no-repeat center center;
                background-size: cover;
                background-position: center;
            }
        </style>
    </head>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-[#222831] shadow-2xl overflow-hidden sm:rounded-lg">
            <div class="flex justify-center mb-4">
                <div class="w-24 h-24 bg-[#76abae] rounded-full flex items-center justify-center"> <!-- Círculo azul -->
                    <img src="{{ asset('images/login/login.png') }}" alt="Logo" class="w-16 h-16"> <!-- Logotipo -->
                </div>
            </div>
            <h2 class="text-center text-4xl  text-[#76abae] mb-4">Inicia Sesión</h2>

            <x-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mt-4 flex flex-col items-center justify-center">
                    <x-label for="email" :value="__('Correo Electrónico')" class="flex items-center justify-center " />
                    <x-input id="email" class="block mt-1 w-80 bg-[#31363f] border-none focus:border-[#76abae] focus:ring-[#76abae] text-[#eeeee]" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                </div>

                <div class="mt-4 flex flex-col items-center justify-center">
                    <x-label for="password" :value="__('Contraseña')" class="flex items-center justify-center " />
                    <x-input id="password" class="block justify-center mt-1 w-80 bg-[#31363f] border-none focus:border-[#76abae] focus:ring-[#76abae] text-[#eeeeee]" type="password" name="password" required autocomplete="current-password" />
                </div>

                <div class="block mt-4 w-1/3 mt-4 flex items-center justify-center">">
                    <label for="remember_me" class="flex items-center">
                        <x-checkbox id="remember_me" name="remember" class="bg-[#31363f] border-none text-[#76abae]" />
                        <span class="ml-2 text-sm text-[#76abae]">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex flex-col items-center justify-center p-1 mt-4">
                    @if (Route::has('password.request'))
                        <a class=" text-sm text-[#76abae] hover:text-[#eeeeee]" href="{{ route('password.request') }}">
                            {{ __('Restablecer Contraseña') }}
                        </a>
                    @endif

                    <x-button class="transition delay-150 duration-300 ease-in-out ml-4 mt-4 hover:bg-[#eeeeee] hover:text-[#31363f] ">
                        {{ __('Entrar') }}
                    </x-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
    

