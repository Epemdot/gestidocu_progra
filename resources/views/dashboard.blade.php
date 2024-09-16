<x-app-layout>
    @section('titulo', 'Mis Clientes')

    @section('contenido')
        <div class="p-4 sm:ml-64 min-h-screen bg-[#76abae]">
            <div class="p-4 border-dashed rounded-lg">
                <div class="text-center text-[#222831] text-[40px] mb-24 font-bold font-['Jura']">Lista de Usuarios</div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                    <div
                        class="w-full h-full max-h-[700px] overflow-y-scroll scrollbar-thin scrollbar-thumb-[#222831] scrollbar-track-gray-100">
                        <!-- Lista de usuarios -->
                        @foreach ($clientes as $cliente)
                            <ul>
                                <li>
                                    <div
                                        class="flex justify-between items-center h-14 bg-[#222831] rounded-md p-4 m-8 w-full sm:max-w-[50%]">
                                        <div class="text-[#eeeeee] text-[22px] font-['Jura'] truncate">
                                            {{ $cliente->nombre_cli }}
                                        </div>
                                        <div>
                                            <button id="dropdownButton{{ $loop->index }}"
                                                data-dropdown-toggle="dropdown{{ $loop->index }}"
                                                class="text-white bg-[#222831] focus:ring-2 focus:outline-none font-medium rounded-lg text-sm p-2"
                                                type="button">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#eeeeee"
                                                    class="w-6 h-6">
                                                    <path fill-rule="evenodd"
                                                        d="M3 6.75A.75.75 0 0 1 3.75 6h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 6.75ZM3 12a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 12Zm0 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Dropdown menu -->
                                    <div id="dropdown{{ $loop->index }}"
                                        class="z-10 hidden bg-[#222831] border-y border-x border-[#eeeeee] rounded-sm shadow w-44 mt-2">
                                        <ul class="text-sm text-[#eeeeee]"
                                            aria-labelledby="dropdownButton{{ $loop->index }}">
                                            <li><a href="#"
                                                    class="block px-4 py-2 border-b hover:bg-[#eeeeee] hover:text-[#222831]">Perfil</a>
                                            </li>
                                            <li><a href="#"
                                                    class="block px-4 py-2 border-b hover:bg-[#eeeeee] hover:text-[#222831]">Procesos</a>
                                            </li>
                                            <li><a href="#"
                                                    class="block px-4 py-2 border-b hover:bg-[#eeeeee] hover:text-[#222831]">Asesoría</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                    <x-botedit />
                </div>
            </div>
        </div>
    @endsection
</x-app-layout>
