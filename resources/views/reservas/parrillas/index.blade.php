@extends('layout.layout')

@section('title', 'Parrillas | Rinconada')

@section('content')
    <div class="flex items-center justify-between py-8">
        <div class="flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                <g clip-path="url(#clip0_1501_9875)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M10.0164 17.0174C10.454 16.5798 11.0475 16.334 11.6663 16.334H44.333C45.6217 16.334 46.6663 17.3787 46.6663 18.6673V19.1923C46.6663 19.2215 46.6658 19.2507 46.6647 19.2798C46.5062 23.5047 44.7156 27.5034 41.6695 30.4353C38.6238 33.3667 34.5602 35.0032 30.333 35.0007C30.3325 35.0007 30.3336 35.0007 30.333 35.0007M30.333 35.0007H25.6663C21.3345 35.0007 17.18 33.2798 14.1169 30.2167C11.0538 27.1536 9.33301 22.9992 9.33301 18.6673C9.33301 18.0485 9.57884 17.455 10.0164 17.0174M14.2353 21.0007C14.6895 23.2254 15.7872 25.2873 17.4168 26.9169C19.6047 29.1048 22.5722 30.334 25.6663 30.334H30.333C33.3529 30.3361 36.2576 29.1672 38.4333 27.073C40.1468 25.4238 41.3041 23.3018 41.7739 21.0007H14.2353Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M39.667 39.6667C39.0482 39.6667 38.4547 39.9125 38.0171 40.3501C37.5795 40.7877 37.3337 41.3812 37.3337 42C37.3337 42.6188 37.5795 43.2123 38.0171 43.6499C38.4547 44.0875 39.0482 44.3333 39.667 44.3333C40.2858 44.3333 40.8793 44.0875 41.3169 43.6499C41.7545 43.2123 42.0003 42.6188 42.0003 42C42.0003 41.3812 41.7545 40.7877 41.3169 40.3501C40.8793 39.9125 40.2858 39.6667 39.667 39.6667ZM34.7172 37.0503C36.03 35.7375 37.8105 35 39.667 35C41.5235 35 43.304 35.7375 44.6167 37.0503C45.9295 38.363 46.667 40.1435 46.667 42C46.667 43.8565 45.9295 45.637 44.6167 46.9497C43.304 48.2625 41.5235 49 39.667 49C37.8105 49 36.03 48.2625 34.7172 46.9497C33.4045 45.637 32.667 43.8565 32.667 42C32.667 40.1435 33.4045 38.363 34.7172 37.0503Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M33.9564 30.5789C35.109 30.0026 36.5106 30.4698 37.0869 31.6224L39.4202 36.289C39.9965 37.4417 39.5293 38.8432 38.3767 39.4195C37.2241 39.9959 35.8225 39.5287 35.2462 38.376L32.9129 33.7094C32.3366 32.5568 32.8037 31.1552 33.9564 30.5789Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.0434 30.5789C23.196 31.1552 23.6632 32.5568 23.0869 33.7094L16.0869 47.7094C15.5105 48.862 14.109 49.3292 12.9564 48.7529C11.8037 48.1766 11.3366 46.775 11.9129 45.6224L18.9129 31.6224C19.4892 30.4698 20.8907 30.0026 22.0434 30.5789Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14 41.9993C14 40.7107 15.0447 39.666 16.3333 39.666H35C36.2887 39.666 37.3333 40.7107 37.3333 41.9993C37.3333 43.288 36.2887 44.3327 35 44.3327H16.3333C15.0447 44.3327 14 43.288 14 41.9993Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M35.0003 7C36.289 7 37.3337 8.04467 37.3337 9.33333V11.6667C37.3337 12.9553 36.289 14 35.0003 14C33.7117 14 32.667 12.9553 32.667 11.6667V9.33333C32.667 8.04467 33.7117 7 35.0003 7Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M28.0003 7C29.289 7 30.3337 8.04467 30.3337 9.33333V11.6667C30.3337 12.9553 29.289 14 28.0003 14C26.7117 14 25.667 12.9553 25.667 11.6667V9.33333C25.667 8.04467 26.7117 7 28.0003 7Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M21.0003 7C22.289 7 23.3337 8.04467 23.3337 9.33333V11.6667C23.3337 12.9553 22.289 14 21.0003 14C19.7117 14 18.667 12.9553 18.667 11.6667V9.33333C18.667 8.04467 19.7117 7 21.0003 7Z"
                        fill="#78B548" />
                </g>
                <defs>
                    <clipPath id="clip0_1501_9875">
                        <rect width="56" height="56" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <div>
                <h3 class="title !mt-0">Parrillas</h3>
                <p class="text-[12px] text-[#003C3E]">Espacios para disfrutar una buena comida.</p>
            </div>
        </div>
        <div>
            <button class="btn-action btn-reservar flex items-center gap-2">Nueva
                Reserva</button>
        </div>
    </div>
    <div class="bg-[#003C3E] text-white rounded-lg overflow-hidden">
        <div class="py-4 px-8 font-normal">Mis reservas:</div>
        <div class="grid grid-cols-4 bg-[#D9E2E2] text-[#003C3E] font-semibold p-3 place-items-center">
            <div>Reserva</div>
            <div>Lugar</div>
            <div>Espacio</div>
            <div>Estado</div>
        </div>
        <div class="divide-y divide-gray-300 bg-gray-50">
            <div class="grid grid-cols-4 p-3 place-items-center text-[#003C3E] text-[14px]">
                <div>30/05/2025</div>
                <div class="font-medium">El Mirador</div>
                <div>Parrilla 8</div>
                <div>
                    <a href="{{ route('reservas.parrillas.editar-invitados') }}"
                        class="border border-[#162968] text-[#162968] bg-[#C8E6FF] px-3 py-1 rounded-[8px] text-sm hover:bg-[#162968] hover:text-white duration-300 transition-colors ease-in-out">Agregar
                        invitados</a>
                </div>
            </div>
            <div class="grid grid-cols-4 p-3 place-items-center text-[#003C3E] text-[14px]">
                <div>30/05/2025</div>
                <div class="font-medium">Los Paltos</div>
                <div>Parrilla 8</div>
                <div>
                    <button
                        class="bg-[#78B548] text-white px-3 py-1 rounded-[8px] text-sm hover:bg-[#5e8c37] duration-300 transition-colors ease-in-out">Reserva
                        Realizada</button>
                </div>
            </div>
            <div class="grid grid-cols-4 p-3 place-items-center text-[#003C3E] text-[14px]">
                <div>30/05/2025</div>
                <div class="font-medium">El Mirador</div>
                <div>Parrilla 8</div>
                <div>
                    <button
                        class="bg-[#78B548] text-white px-3 py-1 rounded-[8px] text-sm hover:bg-[#5e8c37] duration-300 transition-colors ease-in-out">Reserva
                        Realizada</button>
                </div>
            </div>
            <div class="grid grid-cols-4 p-3 place-items-center text-[#003C3E] text-[14px]">
                <div>30/05/2025</div>
                <div class="font-medium">Los Paltos</div>
                <div>Parrilla 8</div>
                <div>
                    <button
                        class="bg-[#78B548] text-white px-3 py-1 rounded-[8px] text-sm hover:bg-[#5e8c37] duration-300 transition-colors ease-in-out">Reserva
                        Realizada</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup -->
    <div class="popup-pay hidden fixed inset-0 flex items-center justify-center bg-black/10 backdrop-blur-sm z-50">
        <div class="bg-[#F3FCFF] p-16 rounded-[24px] shadow-lg w-[550px] relative">
            <!-- Botón de Cerrar -->
            <button class="close-popup absolute top-4 right-4 text-gray-800 hover:text-gray-900">
                ✕
            </button>

            <h2 class="text-center text-[#003C3E] font-bold text-xl mb-8">Elige el tipo de reserva</h2>

            <div class="">
                <div class="relative w-full mb-8">
                    <button
                        class="dropdown-button w-full bg-[#D2EAEE] text-[#003C3E] text-left px-4 py-2 rounded-lg flex justify-between items-center">
                        <span class="selected-option">Selecciona una opción</span>
                        <svg class="w-4 h-4 transition-transform transform rotate-0 arrow-icon"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <ul
                        class="dropdown-menu absolute w-full bg-white border border-gray-300 rounded-lg mt-1 hidden shadow-md">
                        <li class="!px-4 !py-2 hover:bg-gray-100 cursor-pointer">Para mí</li>
                        <li class="!px-4 !py-2 hover:bg-gray-100 cursor-pointer">Familiar</li>
                        <li class="!px-4 !py-2 hover:bg-gray-100 cursor-pointer">Invitado</li>
                    </ul>
                </div>

                <div class="datos-invitado hidden mb-10">
                    <h3 class="text-[#003C3E] font-bold mb-2">Datos del invitado</h3>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-[#003C3E] font-medium mb-1">Nombre completo</label>
                            <div class="flex items-center border border-[#003C3E] rounded-lg px-3 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <g clip-path="url(#clip0_1692_1577)">
                                        <path
                                            d="M8 7C8 8.06087 8.42143 9.07828 9.17157 9.82843C9.92172 10.5786 10.9391 11 12 11C13.0609 11 14.0783 10.5786 14.8284 9.82843C15.5786 9.07828 16 8.06087 16 7C16 5.93913 15.5786 4.92172 14.8284 4.17157C14.0783 3.42143 13.0609 3 12 3C10.9391 3 9.92172 3.42143 9.17157 4.17157C8.42143 4.92172 8 5.93913 8 7Z"
                                            stroke="#003C3E" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M6 21V19C6 17.9391 6.42143 16.9217 7.17157 16.1716C7.92172 15.4214 8.93913 15 10 15H14C15.0609 15 16.0783 15.4214 16.8284 16.1716C17.5786 16.9217 18 17.9391 18 19V21"
                                            stroke="#003C3E" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1692_1577">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <input type="text" class="w-full bg-transparent focus:outline-none"
                                    placeholder="Nombre del invitado">
                            </div>
                        </div>
                        <div>
                            <label class="block text-[#003C3E] font-medium mb-1">Número de DNI</label>
                            <div class="flex items-center border border-[#003C3E] rounded-lg px-3 py-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_1692_4613)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M6 4.75C5.40326 4.75 4.83097 4.98705 4.40901 5.40901C3.98705 5.83097 3.75 6.40326 3.75 7V17C3.75 17.5967 3.98705 18.169 4.40901 18.591C4.83097 19.0129 5.40326 19.25 6 19.25H18C18.5967 19.25 19.169 19.0129 19.591 18.591C20.0129 18.169 20.25 17.5967 20.25 17V7C20.25 6.40326 20.0129 5.83097 19.591 5.40901C19.169 4.98705 18.5967 4.75 18 4.75H6ZM3.34835 4.34835C4.05161 3.64509 5.00544 3.25 6 3.25H18C18.9946 3.25 19.9484 3.64509 20.6517 4.34835C21.3549 5.05161 21.75 6.00544 21.75 7V17C21.75 17.9946 21.3549 18.9484 20.6517 19.6516C19.9484 20.3549 18.9946 20.75 18 20.75H6C5.00544 20.75 4.05161 20.3549 3.34835 19.6516C2.64509 18.9484 2.25 17.9946 2.25 17V7C2.25 6.00544 2.64509 5.05161 3.34835 4.34835ZM7.05546 8.05546C7.57118 7.53973 8.27065 7.25 9 7.25C9.72935 7.25 10.4288 7.53973 10.9445 8.05546C11.4603 8.57118 11.75 9.27065 11.75 10C11.75 10.7293 11.4603 11.4288 10.9445 11.9445C10.4288 12.4603 9.72935 12.75 9 12.75C8.27065 12.75 7.57118 12.4603 7.05546 11.9445C6.53973 11.4288 6.25 10.7293 6.25 10C6.25 9.27065 6.53973 8.57118 7.05546 8.05546ZM9 8.75C8.66848 8.75 8.35054 8.8817 8.11612 9.11612C7.8817 9.35054 7.75 9.66848 7.75 10C7.75 10.3315 7.8817 10.6495 8.11612 10.8839C8.35054 11.1183 8.66848 11.25 9 11.25C9.33152 11.25 9.64946 11.1183 9.88388 10.8839C10.1183 10.6495 10.25 10.3315 10.25 10C10.25 9.66848 10.1183 9.35054 9.88388 9.11612C9.64946 8.8817 9.33152 8.75 9 8.75ZM15 7.25C14.5858 7.25 14.25 7.58579 14.25 8C14.25 8.41421 14.5858 8.75 15 8.75H17C17.4142 8.75 17.75 8.41421 17.75 8C17.75 7.58579 17.4142 7.25 17 7.25H15ZM14.25 12C14.25 11.5858 14.5858 11.25 15 11.25H17C17.4142 11.25 17.75 11.5858 17.75 12C17.75 12.4142 17.4142 12.75 17 12.75H15C14.5858 12.75 14.25 12.4142 14.25 12ZM7 15.25C6.58579 15.25 6.25 15.5858 6.25 16C6.25 16.4142 6.58579 16.75 7 16.75H17C17.4142 16.75 17.75 16.4142 17.75 16C17.75 15.5858 17.4142 15.25 17 15.25H7Z"
                                            fill="#003C3E" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1692_4613">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                                <input type="number" class="w-full bg-transparent focus:outline-none"
                                    placeholder="DNI del invitado">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full flex justify-center">
                    <a href="{{ route('reservas.parrillas.reservar-horario') }}" class="btn-action">
                        Continuar
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const reservarBtns = document.querySelectorAll(".btn-reservar");
            const popup = document.querySelector(".popup-pay");
            const closePopupBtn = document.querySelector(".close-popup");
            const dropdownButton = document.querySelector(".dropdown-button");
            const dropdownMenu = document.querySelector(".dropdown-menu");
            const selectedOption = document.querySelector(".selected-option");
            const arrowIcon = document.querySelector(".arrow-icon");

            // Abrir el popup
            reservarBtns.forEach(btn => {
                btn.addEventListener("click", () => {
                    popup.classList.remove("hidden");
                });
            });

            // Cerrar el popup
            closePopupBtn.addEventListener("click", () => {
                popup.classList.add("hidden");
            });

            // Manejar el dropdown
            dropdownButton.addEventListener("click", () => {
                dropdownMenu.classList.toggle("hidden");
                arrowIcon.classList.toggle("rotate-180");
            });

            dropdownMenu.querySelectorAll("li").forEach(item => {
                item.addEventListener("click", () => {
                    selectedOption.textContent = item.textContent;
                    dropdownMenu.classList.add("hidden");
                    arrowIcon.classList.remove("rotate-180");
                });
            });

            // Cerrar el dropdown si se hace clic fuera
            document.addEventListener("click", (event) => {
                if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
                    dropdownMenu.classList.add("hidden");
                    arrowIcon.classList.remove("rotate-180");
                }
            });

            /*select Invitado*/
            const datosInvitado = document.querySelector(".datos-invitado");

            dropdownMenu.querySelectorAll("li").forEach((item, index) => {
                item.addEventListener("click", () => {
                    selectedOption.textContent = item.textContent;
                    dropdownMenu.classList.add("hidden");
                    arrowIcon.classList.remove("rotate-180");

                    // Mostrar sección solo si es "Invitado"
                    if (index === 2) {
                        datosInvitado.classList.remove("hidden");
                    } else {
                        datosInvitado.classList.add("hidden");
                    }
                });
            });

        });
    </script>
@endpush
