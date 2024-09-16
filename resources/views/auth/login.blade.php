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
    <x-caja-principal>
        <x-logotipo-y-titulo />
        <h2 class="text-center text-4xl text-[#76abae] mb-4">Inicio de Sesión</h2>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mt-4 flex flex-col items-center justify-center">
                <x-label for="email" :value="__('Correo Electrónico')" class="flex mb-3 items-center justify-center text-white" />
                <x-input id="email"
                    class="block mt-1 w-80 bg-[#31363f] border-none focus:border-[#76abae] focus:ring-[#76abae] text-[#eeeeee]"
                    type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4 flex flex-col items-center justify-center">
                <x-label for="password" :value="__('Contraseña')" class="flex items-center justify-center text-white" />
                <x-input id="password"
                    class="block justify-center mt-1 w-80 bg-[#31363f] border-none focus:border-[#76abae] focus:ring-[#76abae] text-[#eeeeee]"
                    type="password" name="password" required autocomplete="current-password" />
            </div>

            <x-boton-y-recordar>
            </x-boton-y-recordar>

        </form>
    </x-caja-principal>
</x-guest-layout>
