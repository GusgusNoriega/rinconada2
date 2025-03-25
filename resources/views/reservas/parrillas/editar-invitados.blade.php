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
            <a href="{{ route('reservas.parrillas.invitados') }}" class="btn-action flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <g clip-path="url(#clip0_1683_8494)">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M6 5C5.73478 5 5.48043 5.10536 5.29289 5.29289C5.10536 5.48043 5 5.73478 5 6V18C5 18.2652 5.10536 18.5196 5.29289 18.7071C5.48043 18.8946 5.73478 19 6 19H18C18.2652 19 18.5196 18.8946 18.7071 18.7071C18.8946 18.5196 19 18.2652 19 18V8.41421L15.5858 5H6ZM3.87868 3.87868C4.44129 3.31607 5.20435 3 6 3H16C16.2652 3 16.5196 3.10536 16.7071 3.29289L20.7071 7.29289C20.8946 7.48043 21 7.73478 21 8V18C21 18.7957 20.6839 19.5587 20.1213 20.1213C19.5587 20.6839 18.7957 21 18 21H6C5.20435 21 4.44129 20.6839 3.87868 20.1213C3.31607 19.5587 3 18.7956 3 18V6C3 5.20435 3.31607 4.44129 3.87868 3.87868Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M9.87868 11.8787C10.4413 11.3161 11.2043 11 12 11C12.7957 11 13.5587 11.3161 14.1213 11.8787C14.6839 12.4413 15 13.2043 15 14C15 14.7957 14.6839 15.5587 14.1213 16.1213C13.5587 16.6839 12.7957 17 12 17C11.2043 17 10.4413 16.6839 9.87868 16.1213C9.31607 15.5587 9 14.7957 9 14C9 13.2043 9.31607 12.4413 9.87868 11.8787ZM12 13C11.7348 13 11.4804 13.1054 11.2929 13.2929C11.1054 13.4804 11 13.7348 11 14C11 14.2652 11.1054 14.5196 11.2929 14.7071C11.4804 14.8946 11.7348 15 12 15C12.2652 15 12.5196 14.8946 12.7071 14.7071C12.8946 14.5196 13 14.2652 13 14C13 13.7348 12.8946 13.4804 12.7071 13.2929C12.5196 13.1054 12.2652 13 12 13Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M8 3C8.55228 3 9 3.44772 9 4V7H13V4C13 3.44772 13.4477 3 14 3C14.5523 3 15 3.44772 15 4V8C15 8.55228 14.5523 9 14 9H8C7.44772 9 7 8.55228 7 8V4C7 3.44772 7.44772 3 8 3Z"
                            fill="white" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1683_8494">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                Guardar
            </a>
        </div>
    </div>
    <div class="bg-[#003C3E] text-white rounded-lg overflow-hidden">
        <div class="py-4 px-8 font-normal flex items-center justify-between">
            <p>Mis reservas:</p>
            <p class="text-[10px]">Ingresa los datos de tu invitado en las secciones correspondientes</p>
        </div>
        <div class="grid grid-cols-4 bg-[#D9E2E2] text-[#003C3E] font-semibold p-3 place-items-center">
            <div>Reserva</div>
            <div>DNI</div>
            <div>Edad</div>
            <div>Monto</div>
        </div>
        <div class="divide-y divide-gray-300 bg-[#F3FCFF] rounded-b-lg overflow-hidden">
            <div class="grid grid-cols-4 gap-8 py-4 px-8 items-center border-b text-[#003C3E]">
                <div class="flex items-center gap-2">
                    <input type="text" value="Juan Carlos Palomino Villar"
                        class="border border-green-700 rounded-md px-3 py-1 text-center outline-none w-full" />
                    <span class="border border-[#6A6107] text-[#6A6107] bg-[#F2EB9F] p-1 rounded-[8px] text-sm">Socio</span>
                </div>
                <div><input type="text" value="98437749"
                        class="border border-green-700 rounded-md px-3 py-1 text-center outline-none w-full" /></div>
                <div><input type="text" value="28 años"
                        class="border border-green-700 rounded-md px-3 py-1 text-center outline-none w-full" /></div>
                <div class="text-[#3A6816] font-semibold text-center">S/. 0 PEN</div>
            </div>
            <div class="grid grid-cols-4 gap-8 p-4 px-8 items-center border-b text-[#003C3E]">
                <div class="flex items-center gap-2">
                    <input type="text" value=""
                        class="border border-green-700 rounded-md px-3 py-1 text-center outline-none w-full"
                        placeholder="Escribe aqui" />
                </div>
                <div><input type="text" value="98437749"
                        class="border border-green-700 rounded-md px-3 py-1 text-center outline-none w-full" /></div>
                <div><input type="text" value="28 años"
                        class="border border-green-700 rounded-md px-3 py-1 text-center outline-none w-full" /></div>
                <div class="text-[#3A6816] font-semibold text-center">S/. 30 PEN</div>
            </div>
            <div class="grid grid-cols-4 gap-8 p-4 px-8 items-center border-b text-[#003C3E]">
                <div class="flex items-center gap-2">
                    <input type="text" value=""
                        class="border border-green-700 rounded-md px-3 py-1 text-center outline-none w-full"
                        placeholder="Escribe aqui" />
                </div>
                <div><input type="text" value="98437749"
                        class="border border-green-700 rounded-md px-3 py-1 text-center outline-none w-full" /></div>
                <div><input type="text" value="28 años"
                        class="border border-green-700 rounded-md px-3 py-1 text-center outline-none w-full" /></div>
                <div class="text-[#3A6816] font-semibold text-center">S/. 30 PEN</div>
            </div>
            <div class="grid grid-cols-4 gap-8 p-4 px-8 items-center border-b text-[#003C3E]">
                <div class="flex items-center gap-2">
                    <input type="text" value=""
                        class="border border-green-700 rounded-md px-3 py-1 text-center outline-none w-full"
                        placeholder="Escribe aqui" />
                </div>
                <div><input type="text" value="98437749"
                        class="border border-green-700 rounded-md px-3 py-1 text-center outline-none w-full" /></div>
                <div><input type="text" value="28 años"
                        class="border border-green-700 rounded-md px-3 py-1 text-center outline-none w-full" /></div>
                <div class="text-[#3A6816] font-semibold text-center">S/. 30 PEN</div>
            </div>
            <div class="grid grid-cols-4 gap-8 p-4 px-8 items-center border-b text-[#003C3E]">
                <div class="flex items-center gap-2">
                    <input type="text" value=""
                        class="border border-green-700 rounded-md px-3 py-1 text-center outline-none w-full"
                        placeholder="Escribe aqui" />
                </div>
                <div><input type="text" value="98437749"
                        class="border border-green-700 rounded-md px-3 py-1 text-center outline-none w-full" /></div>
                <div><input type="text" value="28 años"
                        class="border border-green-700 rounded-md px-3 py-1 text-center outline-none w-full" /></div>
                <div class="text-[#3A6816] font-semibold text-center">S/. 30 PEN</div>
            </div>
            <div class="col-span-5 py-4 px-8">
                <button
                    class="w-full rounded-lg p-3 border border-dashed border-[#003C3E] text-[#003C3E] flex items-center gap-2 justify-center text-lg font-semibold hover:bg-gray-100 duration-300 ease-in-out transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24"
                        fill="none">
                        <g clip-path="url(#clip0_1468_13797)">
                            <path
                                d="M8.5 7C8.5 8.06087 8.92143 9.07828 9.67157 9.82843C10.4217 10.5786 11.4391 11 12.5 11C13.5609 11 14.5783 10.5786 15.3284 9.82843C16.0786 9.07828 16.5 8.06087 16.5 7C16.5 5.93913 16.0786 4.92172 15.3284 4.17157C14.5783 3.42143 13.5609 3 12.5 3C11.4391 3 10.4217 3.42143 9.67157 4.17157C8.92143 4.92172 8.5 5.93913 8.5 7Z"
                                stroke="#003C3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M16.5 19H22.5" stroke="#003C3E" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M19.5 16V22" stroke="#003C3E" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M6.5 21V19C6.5 17.9391 6.92143 16.9217 7.67157 16.1716C8.42172 15.4214 9.43913 15 10.5 15H14.5"
                                stroke="#003C3E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1468_13797">
                                <rect width="24" height="24" fill="white" transform="translate(0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                    Añadir invitados
                </button>
            </div>
        </div>
    </div>
    <div class="flex items-center justify-end w-full gap-2 text-[#003C3E] text-[14px] mt-[80px]">
        Aforo:
        <span class="text-[#78B548] text-[30px] font-bold">20 Personas</span>
    </div>

@endsection
