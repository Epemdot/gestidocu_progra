<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#76abae] border border-transparent rounded-md  text-xs text-white uppercase tracking-widest hover:bg-[#eeeeee]  focus:bg-[3C5B6F] active:bg-[#eeeeee] transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-[#76abae] focus:ring-offset-2 transition ease-in-out duration-100 ']) }}>
    {{ $slot }}
</button>
