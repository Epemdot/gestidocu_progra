<x-guest-layout>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <style>
            body {
                font-family: 'Jura', sans-serif;
                background: linear-gradient(rgb(118, 171, 174, 0.6), rgb(118, 171, 174, 0.6)),
                  url('/images/login/gestidoc.jpg') no-repeat center center;
                background-size: cover;
                background-position: center;}
        </style>
    </head>
    <x-caja-principal>

        <div class="mb-4 text-sm text-[#eeeeee]">
            {{ __('¿Olvidaste tu contraseña? No hay problema. Solo danos tu dirección de correo electrónico y te enviaremos un enlace para restablecer la contraseña que te permitirá elegir una nueva..') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <x-label for="email" :value="__('Correo Electrónico')" class="flex mb-3 items-center justify-center text-[#76abae]" />
            <x-input-email/>

            <div class="flex items-center justify-end mt-4">
                <x-button class="text-[#31363f]">
                    {{ __('Solicitar Enlace') }}
                </x-button>
            </div>
        </form>
    </x-caja-principal>
</x-guest-layout>
