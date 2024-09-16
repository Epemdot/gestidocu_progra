<form method="POST" action="{{ route('login') }}">
    @csrf

    <div class="mt-4 flex flex-col items-center justify-center">
        <x-label for="email" :value="__('Correo Electrónico')" class="flex mb-3 items-center justify-center " />
        <x-input id="email" class="block mt-1 w-80 bg-[#31363f] border-none focus:border-[#76abae] focus:ring-[#76abae] text-[#eeeeee]" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
    </div>

    <div class="mt-4 flex flex-col items-center justify-center">
        <x-label for="password" :value="__('Contraseña')" class="flex items-center justify-center " />
        <x-input id="password" class="block justify-center mt-1 w-80 bg-[#31363f] border-none focus:border-[#76abae] focus:ring-[#76abae] text-[#eeeeee]" type="password" name="password" required autocomplete="current-password" />
    </div>
</form>