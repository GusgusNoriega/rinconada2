@extends('layout.layout')

@section('title', 'Spa')

@section('content')
    <div class="flex items-center justify-between py-8">
        <div class="flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                <g clip-path="url(#clip0_1501_8262)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M23.442 5.11551C27.9687 4.21393 32.661 4.67509 36.9255 6.44068C41.19 8.20627 44.8351 11.1969 47.3997 15.0344C49.9643 18.8719 51.3332 23.3838 51.3332 27.9994C51.3332 29.288 50.2885 30.3327 48.9998 30.3327C47.7112 30.3327 46.6665 29.288 46.6665 27.9994C46.6665 24.3069 45.5714 20.6974 43.5197 17.6274C41.4681 14.5574 38.552 12.1649 35.1404 10.7524C31.7288 9.33995 27.9749 8.97101 24.3536 9.69228C20.7323 10.4135 17.4062 12.1926 14.7961 14.8044C12.186 17.4163 10.4092 20.7435 9.69034 24.3653C8.97149 27.9871 9.34293 31.7407 10.7577 35.1514C12.1724 38.5621 14.5669 41.4766 17.6383 43.5262C20.7096 45.5758 24.3198 46.6685 28.0123 46.666C29.301 46.6652 30.3463 47.7091 30.3472 48.9978C30.348 50.2865 29.3041 51.3318 28.0154 51.3327C23.3998 51.3358 18.8871 49.9699 15.0479 47.4079C11.2087 44.8458 8.21556 41.2028 6.44713 36.9394C4.6787 32.6761 4.2144 27.984 5.11296 23.4568C6.01153 18.9295 8.23258 14.7705 11.4952 11.5057C14.7578 8.24092 18.9154 6.01709 23.442 5.11551Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M18.6665 23.3333C18.6665 22.0447 19.7112 21 20.9998 21H21.0232C22.3118 21 23.3565 22.0447 23.3565 23.3333C23.3565 24.622 22.3118 25.6667 21.0232 25.6667H20.9998C19.7112 25.6667 18.6665 24.622 18.6665 23.3333Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M32.6665 23.3333C32.6665 22.0447 33.7112 21 34.9998 21H35.0232C36.3118 21 37.3565 22.0447 37.3565 23.3333C37.3565 24.622 36.3118 25.6667 35.0232 25.6667H34.9998C33.7112 25.6667 32.6665 24.622 32.6665 23.3333Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M20.5338 33.3327C21.4543 32.4308 22.9316 32.4459 23.8335 33.3664C24.3766 33.9207 25.0249 34.3611 25.7404 34.6617C26.4558 34.9624 27.2241 35.1172 28.0002 35.1172C28.7762 35.1172 29.5445 34.9624 30.26 34.6617C30.9754 34.3611 31.6237 33.9207 32.1668 33.3664C33.0687 32.4459 34.546 32.4308 35.4665 33.3327C36.387 34.2346 36.402 35.7119 35.5002 36.6323C34.5225 37.6301 33.3556 38.4228 32.0678 38.964C30.7799 39.5051 29.3971 39.7839 28.0002 39.7839C26.6032 39.7839 25.2204 39.5051 23.9325 38.964C22.6447 38.4228 21.4778 37.6301 20.5002 36.6323C19.5983 35.7119 19.6134 34.2346 20.5338 33.3327Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M44.3335 33.834C45.4108 33.834 46.3481 34.5716 46.6014 35.6187C46.9796 37.1822 47.7815 38.6111 48.9189 39.7485C50.0564 40.886 51.4853 41.6879 53.0488 42.0661C54.0959 42.3194 54.8335 43.2566 54.8335 44.334C54.8335 45.4113 54.0959 46.3486 53.0488 46.6019C51.4853 46.9801 50.0564 47.782 48.9189 48.9194C47.7815 50.0568 46.9796 51.4858 46.6014 53.0493C46.3481 54.0964 45.4108 54.834 44.3335 54.834C43.2562 54.834 42.3189 54.0964 42.0656 53.0493C41.6874 51.4858 40.8855 50.0568 39.7481 48.9194C38.6106 47.782 37.1817 46.9801 35.6182 46.6019C34.5711 46.3486 33.8335 45.4113 33.8335 44.334C33.8335 43.2566 34.5711 42.3194 35.6182 42.0661C37.1817 41.6879 38.6106 40.886 39.7481 39.7485C40.8855 38.6111 41.6874 37.1822 42.0656 35.6187C42.3189 34.5716 43.2562 33.834 44.3335 33.834ZM44.3335 41.5587C43.9434 42.0841 43.514 42.5822 43.0479 43.0484C42.5817 43.5145 42.0837 43.9439 41.5582 44.334C42.0837 44.724 42.5817 45.1534 43.0479 45.6196C43.514 46.0857 43.9434 46.5838 44.3335 47.1092C44.7236 46.5838 45.1529 46.0857 45.6191 45.6196C46.0852 45.1534 46.5833 44.724 47.1088 44.334C46.5833 43.9439 46.0852 43.5145 45.6191 43.0484C45.1529 42.5822 44.7236 42.0841 44.3335 41.5587Z"
                        fill="#78B548" />
                </g>
                <defs>
                    <clipPath id="clip0_1501_8262">
                        <rect width="56" height="56" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <div>
                <h3 class="title !mt-0">Spa</h3>
                <p class="text-[12px] text-[#003C3E]">Reserva tu sesión en el Spa del Country Club.</p>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap gap-6 w-full items-center">

        <div
            class="bg-white rounded-xl shadow-lg hover:shadow-xl px-10 py-11 text-center w-full transition-all group max-w-[275px]">
            <h2 class="text-lg font-bold text-[#78B548]">Masajes</h2>
            <div class="my-6 flex justify-center">
                <img src="{{ asset('imgs/spa1.svg') }}" alt="Icono de masaje" class="h-[70px] w-auto">
            </div>
            <p class="text-[#003C3E] mb-6 text-[14px] min-h-[40px]">Ambiente acogedor para que te relajes.</p>
            <button
                class="btn-reservar bg-[#003C3E] text-white py-3 w-full rounded-full text-sm font-medium group-hover:bg-teal-700 transition">
                Reservar
            </button>
        </div>

        <div
            class="bg-white rounded-xl shadow-lg hover:shadow-xl px-10 py-11 text-center w-full transition-all group max-w-[275px]">
            <h2 class="text-lg font-bold text-[#78B548]">Terapias</h2>
            <div class="my-6 flex justify-center">
                <img src="{{ asset('imgs/spa5.svg') }}" alt="Icono de masaje" class="h-[70px] w-auto">
            </div>
            <p class="text-[#003C3E] mb-6 text-[14px] min-h-[40px]">Un refugio para conectar con la naturaleza.</p>
            <button
                class="btn-reservar bg-[#003C3E] text-white py-3 w-full rounded-full text-sm font-medium group-hover:bg-teal-700 transition">
                Reservar
            </button>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
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
                    <a href="{{ route('reservas.spa.masajes') }}" class="btn-action">
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
