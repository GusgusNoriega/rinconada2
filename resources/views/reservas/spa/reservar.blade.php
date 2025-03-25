@extends('layout.layout')

@section('title', 'Spa')

@section('content')
    <div class="flex items-center justify-between py-8">
        <div class="flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                <g clip-path="url(#clip0_1671_13155)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M14 13.9987C13.3812 13.9987 12.7877 14.2445 12.3501 14.6821C11.9125 15.1197 11.6667 15.7132 11.6667 16.332V44.332C11.6667 44.9509 11.9125 45.5444 12.3501 45.9819C12.7877 46.4195 13.3812 46.6654 14 46.6654H42C42.6188 46.6654 43.2123 46.4195 43.6499 45.9819C44.0875 45.5444 44.3333 44.9509 44.3333 44.332V16.332C44.3333 15.7132 44.0875 15.1197 43.6499 14.6821C43.2123 14.2445 42.6188 13.9987 42 13.9987H14ZM9.05025 11.3823C10.363 10.0695 12.1435 9.33203 14 9.33203H42C43.8565 9.33203 45.637 10.0695 46.9497 11.3823C48.2625 12.695 49 14.4755 49 16.332V44.332C49 46.1885 48.2625 47.969 46.9497 49.2818C45.637 50.5945 43.8565 51.332 42 51.332H14C12.1435 51.332 10.363 50.5945 9.05025 49.2818C7.7375 47.969 7 46.1885 7 44.332V16.332C7 14.4755 7.7375 12.695 9.05025 11.3823Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M37.3333 4.66797C38.622 4.66797 39.6667 5.71264 39.6667 7.0013V16.3346C39.6667 17.6233 38.622 18.668 37.3333 18.668C36.0447 18.668 35 17.6233 35 16.3346V7.0013C35 5.71264 36.0447 4.66797 37.3333 4.66797Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M18.6666 4.66797C19.9552 4.66797 20.9999 5.71264 20.9999 7.0013V16.3346C20.9999 17.6233 19.9552 18.668 18.6666 18.668C17.3779 18.668 16.3333 17.6233 16.3333 16.3346V7.0013C16.3333 5.71264 17.3779 4.66797 18.6666 4.66797Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M7 25.6654C7 24.3767 8.04467 23.332 9.33333 23.332H46.6667C47.9553 23.332 49 24.3767 49 25.6654C49 26.954 47.9553 27.9987 46.6667 27.9987H9.33333C8.04467 27.9987 7 26.954 7 25.6654Z"
                        fill="#78B548" />
                </g>
                <defs>
                    <clipPath id="clip0_1671_13155">
                        <rect width="56" height="56" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <div>
                <h3 class="title !mt-0">Reserva de horario</h3>
                <p class="text-[12px] text-[#003C3E]">Selecciona horario que se acomode a tu disponibilidad</p>
            </div>
        </div>
        <div>
            <button id="btn-pay" class="btn-action flex items-center gap-2">Continuar <svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                    <g clip-path="url(#clip0_1692_875)">
                        <path d="M9 6.5L15 12.5L9 18.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1692_875">
                            <rect width="24" height="24" fill="white" transform="translate(0 0.5)" />
                        </clipPath>
                    </defs>
                </svg></button>
        </div>
    </div>

    <div class="">
        <div class="flex gap-6">
            <!-- Calendario -->
            <x-calendar />

            <div class="w-full">
                <h2 class="text-lg font-semibold">Disponibilidad del <span class="font-bold">Lunes 24 de Abril del
                        2025</span></h2>
                <div class="grid grid-cols-6 gap-2 mt-8">
                    <button class="border rounded-lg py-2 px-4 text-green-700 border-green-500">8:00 AM</button>
                    <button class="border rounded-lg py-2 px-4 text-green-700 border-green-500">9:00 AM</button>
                    <button class="border rounded-lg py-2 px-4 text-gray-400 border-gray-300" disabled>10:00 AM</button>
                    <button class="border rounded-lg py-2 px-4 text-gray-400 border-gray-300" disabled>11:00 AM</button>
                    <button class="border rounded-lg py-2 px-4 text-gray-400 border-gray-300" disabled>12:00 AM</button>
                    <button class="border rounded-lg py-2 px-4 text-green-700 border-green-500">1:00 PM</button>
                    <button class="border rounded-lg py-2 px-4 text-green-700 border-green-500">2:00 PM</button>
                    <button class="border rounded-lg py-2 px-4 text-green-700 border-green-500">3:00 PM</button>
                    <button class="border rounded-lg py-2 px-4 text-green-700 border-green-500">4:00 PM</button>
                    <button class="border rounded-lg py-2 px-4 text-green-700 border-green-500">5:00 PM</button>
                    <button class="border rounded-lg py-2 px-4 text-green-700 border-green-500">6:00 PM</button>
                    <button class="border rounded-lg py-2 px-4 text-green-700 border-green-500">7:00 PM</button>
                    <button class="border rounded-lg py-2 px-4 text-green-700 border-green-500">8:00 PM</button>
                    <button class="border rounded-lg py-2 px-4 text-green-700 border-green-500">9:00 PM</button>
                </div>
                <div class="flex items-center gap-4 mt-8">
                    <div class="bg-gray-200 w-20 h-20 rounded-full"><img src=""
                            class="w-full h-full rounded-full object-cover" alt="">
                    </div>
                    <div>
                        <h3 class="font-semibold">Josefina Carls Montoya</h3>
                        <p class="text-sm text-gray-500">Terapeuta disponible en el horario seleccionado</p>
                        <p class="text-sm text-gray-700 flex items-center gap-1">
                            <span class="text-green-500"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_1671_13325)">
                                        <path
                                            d="M5 11C5.53043 11 6.03914 11.2107 6.41421 11.5858C6.78929 11.9609 7 12.4696 7 13V15H17V13C17 12.4696 17.2107 11.9609 17.5858 11.5858C17.9609 11.2107 18.4696 11 19 11C19.5304 11 20.0391 11.2107 20.4142 11.5858C20.7893 11.9609 21 12.4696 21 13V17C21 17.5304 20.7893 18.0391 20.4142 18.4142C20.0391 18.7893 19.5304 19 19 19H5C4.46957 19 3.96086 18.7893 3.58579 18.4142C3.21071 18.0391 3 17.5304 3 17V13C3 12.4696 3.21071 11.9609 3.58579 11.5858C3.96086 11.2107 4.46957 11 5 11Z"
                                            stroke="#003C3E" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M5 11V6C5 5.20435 5.31607 4.44129 5.87868 3.87868C6.44129 3.31607 7.20435 3 8 3H16C16.7956 3 17.5587 3.31607 18.1213 3.87868C18.6839 4.44129 19 5.20435 19 6V11"
                                            stroke="#003C3E" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M6 19V21" stroke="#003C3E" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M18 19V21" stroke="#003C3E" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_1671_13325">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg></span> Cabina N°2
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full bg-white border-t border-gray-300 py-5 px-4 shadow-md">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <div class="w-1 bg-green-500 h-full"></div>
                <div>
                    <p class="text-gray-800 text-sm">Servicio Elegido</p>
                    <p class="text-green-600 font-bold text-[30px]">
                        Masajes: <span class="text-gray-900 font-extrabold text-base">Masajes Integrales</span>
                        <span class="text-gray-500 text-base">(6 Sesiones)</span>
                    </p>
                </div>
            </div>
            <div class="text-right">
                <p class="text-gray-800 text-sm">Total</p>
                <div class="flex gap-4 items-center">
                    <p class="text-red-500 line-through font-semibold">S/. 100 PEN</p>
                    <p class="text-gray-900 font-extrabold text-[30px]">S/. 182 PEN</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Popup -->
    <div id="popup-pay" class="hidden fixed inset-0 flex items-center justify-center bg-black/10 backdrop-blur-sm z-50">
        <div class="bg-[#F3FCFF] p-16 rounded-[24px] shadow-lg w-[550px] relative">
            <!-- Botón de Cerrar -->
            <button class="close-popup absolute top-4 right-4 text-gray-800 hover:text-gray-900">
                ✕
            </button>

            <h2 class="text-center text-[#003C3E] font-bold text-xl mb-8">Resumen de reserva</h2>

            <div class="">

                <div></div>

                <div class="w-full flex justify-center">
                    <button class="btn-action">
                        Realizar pago
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        // POPUP FILTROS
        const btnPay = document.getElementById("btn-pay");
        const popup = document.getElementById("popup-pay");

        if (btnPay && popup) {
            btnPay.addEventListener("click", function() {
                popup.classList.toggle("hidden");
            });

            document.addEventListener("click", function(event) {
                if (!popup.contains(event.target) && !btnPay.contains(event.target)) {
                    popup.classList.add("hidden");
                }
            });
        }
    </script>
@endpush
