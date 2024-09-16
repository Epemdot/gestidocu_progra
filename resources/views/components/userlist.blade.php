@foreach ($clientes as $cliente)
<ul>
    
    <li>    
    <div class="flex items-center h-32 rounded bg-[#76abae]">
        <div class="items-center grid justify-items-stretch w-[329px] h-14 w-[475px] bg-[#222831] rounded-md">
            <div class="ml-4 items-center justify-start text-[#eeeeee] text-[22px] font-['Jura']">
                {{ $cliente->nombre_cli }}
            </div>
            <div class="justify-self-end">
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="text-white bg-[#222831] focus:ring-2 focus:outline-none focus:[#eeeeee] font-medium rounded-lg text-sm px-2 py-2 text-center items-center"
                    type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#eeeeee"
                        class="size-8 justify-content-end">
                        <path fill-rule="evenodd"
                            d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>

            <!-- Dropdown menu -->
            <div id="dropdown"
                class="z-10 hidden bg-[#222831] border-y border-x border-[#eeeeee] rounded-md shadow w-44">
                <ul class="text-sm text-[#eeeeee]" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 border-b hover:bg-[#31363f] hover:rounded-md">Perfil</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 border-b hover:bg-[#31363f] hover:rounded-md">Procesos</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-[#31363f] hover:rounded-md">Asesoría</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</li>
    
</ul>
@endforeach