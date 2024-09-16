<div class="block mt-4 mt-4 flex items-center justify-center">
    <label for="remember_me" class="flex items-center">
        <x-checkbox id="remember_me" name="remember" class="flex items-center justify-center bg-[#31363f] border-none text-[#76abae]" />
        <span class="ml-2 text-sm text-[#76abae]">{{ __('Recordarme') }}</span>
    </label>
</div>

<div class="flex flex-col items-center justify-center py-1 mt-4">
    @if (Route::has('password.request'))
        <a class=" text-sm text-[#76abae] hover:text-[#eeeeee]" href="{{ route('password.request') }}">
            {{ __('Restablecer Contraseña') }}
        </a>
    @endif

    <x-button type="submit" class="transition delay-150 duration-300 ease-in-out ml-4 mt-4 hover:bg-[#eeeeee] hover:text-[#31363f] mb-3">
        {{ __('Ingresar') }}
    </x-button>
    
</div>