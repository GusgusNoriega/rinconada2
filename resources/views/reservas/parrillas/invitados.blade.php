@extends('layout.layout')

@section('title', 'Parrillas - Invitados | Rinconada')

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
            <a href="{{ route('reservas.parrillas.editar-invitados') }}" class="btn-action flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <g clip-path="url(#clip0_1692_7761)">
                        <path
                            d="M4 20.0003H8L18.5 9.5003C18.7626 9.23766 18.971 8.92585 19.1131 8.58269C19.2553 8.23953 19.3284 7.87174 19.3284 7.5003C19.3284 7.12887 19.2553 6.76107 19.1131 6.41791C18.971 6.07475 18.7626 5.76295 18.5 5.5003C18.2374 5.23766 17.9256 5.02932 17.5824 4.88718C17.2392 4.74503 16.8714 4.67187 16.5 4.67188C16.1286 4.67188 15.7608 4.74503 15.4176 4.88718C15.0744 5.02932 14.7626 5.23766 14.5 5.5003L4 16.0003V20.0003Z"
                            stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M13.5 6.5L17.5 10.5" stroke="white" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1692_7761">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                Editar
            </a>
        </div>
    </div>
    <div class="bg-[#003C3E] text-white rounded-lg overflow-hidden">
        <div class="py-4 px-8 font-normal flex items-center justify-between">
            <p>Mis reservas:</p>
            <div class="relative">
                <button id="toggleFiltros" class=" flex items-center gap-2 py-1 px-4 bg-white rounded-full text-[#003C3E]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" viewBox="0 0 19 20"
                        fill="none">
                        <g clip-path="url(#clip0_1631_10375)">
                            <path
                                d="M3.20679 3.69922H15.6206V5.38439C15.6205 5.7959 15.457 6.19052 15.1659 6.48146L11.7413 9.90612V15.3372L7.0861 16.8889V10.294L3.61024 6.4706C3.35067 6.18502 3.20683 5.81298 3.20679 5.42706V3.69922Z"
                                stroke="#003C3E" stroke-width="1.55172" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1631_10375">
                                <rect width="18.6207" height="18.6207" fill="white"
                                    transform="translate(0.103394 0.595703)" />
                            </clipPath>
                        </defs>
                    </svg>
                    Filtros
                </button>
                <!-- Popup -->
                <div id="popupFiltros"
                    class="hidden absolute right-[5%] top-full mt-2 w-56 bg-white rounded-lg shadow-lg p-4 border border-gray-200 z-[99]">
                    <div class="absolute -top-2 right-4 w-4 h-4 bg-white rotate-45 border-l border-t border-gray-200"></div>
                    <div class="flex flex-col gap-3">

                        <div class="flex items-center">
                            <div class="checkbox-wrapper-65 ">
                                <label for="socios" class="!flex items-center">
                                    <input id="socios" type="checkbox">
                                    <span class="cbx">
                                        <svg viewBox="0 0 12 11" height="11px" width="12px">
                                            <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span class="text-[#003C3E]">Socios</span>

                                </label>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="checkbox-wrapper-65 ">
                                <label for="invitados" class="!flex items-center">
                                    <input id="invitados" type="checkbox">
                                    <span class="cbx">
                                        <svg viewBox="0 0 12 11" height="11px" width="12px">
                                            <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span class="text-[#003C3E]">Invitados</span>

                                </label>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="checkbox-wrapper-65 ">
                                <label for="pagados" class="!flex items-center">
                                    <input id="pagados" type="checkbox">
                                    <span class="cbx">
                                        <svg viewBox="0 0 12 11" height="11px" width="12px">
                                            <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span class="text-[#003C3E]">Pagados</span>

                                </label>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="checkbox-wrapper-65 ">
                                <label for="pendientes" class="!flex items-center">
                                    <input id="pendientes" type="checkbox">
                                    <span class="cbx">
                                        <svg viewBox="0 0 12 11" height="11px" width="12px">
                                            <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span class="text-[#003C3E]">Pendientes</span>

                                </label>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="checkbox-wrapper-65 ">
                                <label for="mayores13" class="!flex items-center">
                                    <input id="mayores13" type="checkbox">
                                    <span class="cbx">
                                        <svg viewBox="0 0 12 11" height="11px" width="12px">
                                            <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span class="text-[#003C3E]">Mayores de 13</span>

                                </label>
                            </div>
                        </div>
                        <div class="flex items-center">
                            <div class="checkbox-wrapper-65 ">
                                <label for="menores13" class="!flex items-center">
                                    <input id="menores13" type="checkbox">
                                    <span class="cbx">
                                        <svg viewBox="0 0 12 11" height="11px" width="12px">
                                            <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                                        </svg>
                                    </span>
                                    <span class="text-[#003C3E]">Menores de 13</span>

                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-5 bg-[#D9E2E2] text-[#003C3E] font-semibold p-3 place-items-center">
            <div>Reserva</div>
            <div>DNI</div>
            <div>Edad</div>
            <div>Monto</div>
            <div>Estado</div>

        </div>
        <div class="divide-y divide-gray-300 bg-[#F3FCFF]">
            <div class="grid grid-cols-5 gap-8 py-4 px-8 items-center border-b text-[#003C3E]">
                <div class="flex items-center gap-2">
                    <span class="line-clamp-1">Juan Carlos Palomino Villar</span>
                    <span
                        class="border border-[#6A6107] text-[#6A6107] bg-[#F2EB9F] p-1 rounded-[8px] text-sm">Socio</span>
                </div>
                <div class="text-center"><span>74992892</span></div>
                <div class="text-center"><span>28 años</span></div>
                <div class="text-[#3A6816] font-semibold text-center">S/. 0 PEN</div>
                <div class="flex items-center">
                    <div class="mx-auto checkbox-wrapper-65 ">
                        <label for="invitado1" class="!flex items-center">
                            <input id="invitado1" type="checkbox">
                            <span class="cbx">
                                <svg viewBox="0 0 12 11" height="11px" width="12px">
                                    <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                                </svg>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-5 gap-8 p-4 px-8 items-center border-b text-[#003C3E]">
                <div class="flex items-center gap-2">
                    <span class="line-clamp-1">Juan Carlos Palomino Villar</span>

                </div>
                <div class="text-center"><span>74992892</span></div>
                <div class="text-center"><span>28 años</span></div>
                <div class="text-[#3A6816] font-semibold text-center">S/. 30 PEN</div>
                <div class="flex items-center">
                    <div class="mx-auto checkbox-wrapper-65 ">
                        <label for="invitado2" class="!flex items-center">
                            <input id="invitado2" type="checkbox">
                            <span class="cbx">
                                <svg viewBox="0 0 12 11" height="11px" width="12px">
                                    <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                                </svg>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-5 gap-8 p-4 px-8 items-center border-b text-[#003C3E]">
                <div class="flex items-center gap-2">
                    <span class="line-clamp-1">Juan Carlos Palomino Villar</span>

                </div>
                <div class="text-center"><span>74992892</span></div>
                <div class="text-center"><span>28 años</span></div>
                <div class="text-[#3A6816] font-semibold text-center">S/. 30 PEN</div>
                <div class="flex items-center">
                    <div class="mx-auto checkbox-wrapper-65 ">
                        <label for="invitado3" class="!flex items-center">
                            <input id="invitado3" type="checkbox">
                            <span class="cbx">
                                <svg viewBox="0 0 12 11" height="11px" width="12px">
                                    <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                                </svg>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-5 gap-8 p-4 px-8 items-center border-b text-[#003C3E]">
                <div class="flex items-center gap-2">
                    <span class="line-clamp-1">Juan Carlos Palomino Villar</span>

                </div>
                <div class="text-center"><span>74992892</span></div>
                <div class="text-center"><span>28 años</span></div>
                <div class="text-[#3A6816] font-semibold text-center">S/. 0 PEN</div>
                <div class="flex items-center">
                    <div class="mx-auto checkbox-wrapper-65 ">
                        <label for="invitado4" class="!flex items-center">
                            <input id="invitado4" type="checkbox">
                            <span class="cbx">
                                <svg viewBox="0 0 12 11" height="11px" width="12px">
                                    <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                                </svg>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-5 gap-8 p-4 px-8 items-center border-b text-[#003C3E]">
                <div class="flex items-center gap-2">
                    <span class="line-clamp-1">Juan Carlos Palomino Villar</span>

                </div>
                <div class="text-center"><span>74992892</span></div>
                <div class="text-center"><span>28 años</span></div>
                <div class="text-[#3A6816] font-semibold text-center">S/. 0 PEN</div>
                <div class="flex items-center">
                    <div class="mx-auto checkbox-wrapper-65 ">
                        <label for="invitado5" class="!flex items-center">
                            <input id="invitado5" type="checkbox">
                            <span class="cbx">
                                <svg viewBox="0 0 12 11" height="11px" width="12px">
                                    <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                                </svg>
                            </span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-end w-full gap-2 text-[#003C3E] text-[14px] my-[70px]">
        Total:
        <span class="text-[#78B548] text-[30px] font-bold">S/. 60PEN</span>
    </div>
    <div class="flex justify-end">
        <button class="btn-action flex items-center gap-2">
            Realizar pago
        </button>
    </div>

@endsection

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const toggleBtn = document.getElementById("toggleFiltros");
            const popup = document.getElementById("popupFiltros");

            toggleBtn.addEventListener("click", function() {
                popup.classList.toggle("hidden");
            });

            document.addEventListener("click", function(event) {
                if (!popup.contains(event.target) && !toggleBtn.contains(event.target)) {
                    popup.classList.add("hidden");
                }
            });
        });
    </script>
@endpush
