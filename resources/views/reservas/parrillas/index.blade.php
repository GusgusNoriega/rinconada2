@extends('layout.layout')

@section('title', 'Parrillas')

@section('content')
  <div class="flex items-center justify-between py-8">
    <div class="flex items-center gap-4">
      <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
        <g clip-path="url(#clip0_1501_9875)">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0164 17.0174C10.454 16.5798 11.0475 16.334 11.6663 16.334H44.333C45.6217 16.334 46.6663 17.3787 46.6663 18.6673V19.1923C46.6663 19.2215 46.6658 19.2507 46.6647 19.2798C46.5062 23.5047 44.7156 27.5034 41.6695 30.4353C38.6238 33.3667 34.5602 35.0032 30.333 35.0007C30.3325 35.0007 30.3336 35.0007 30.333 35.0007M30.333 35.0007H25.6663C21.3345 35.0007 17.18 33.2798 14.1169 30.2167C11.0538 27.1536 9.33301 22.9992 9.33301 18.6673C9.33301 18.0485 9.57884 17.455 10.0164 17.0174M14.2353 21.0007C14.6895 23.2254 15.7872 25.2873 17.4168 26.9169C19.6047 29.1048 22.5722 30.334 25.6663 30.334H30.333C33.3529 30.3361 36.2576 29.1672 38.4333 27.073C40.1468 25.4238 41.3041 23.3018 41.7739 21.0007H14.2353Z" fill="#78B548"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M39.667 39.6667C39.0482 39.6667 38.4547 39.9125 38.0171 40.3501C37.5795 40.7877 37.3337 41.3812 37.3337 42C37.3337 42.6188 37.5795 43.2123 38.0171 43.6499C38.4547 44.0875 39.0482 44.3333 39.667 44.3333C40.2858 44.3333 40.8793 44.0875 41.3169 43.6499C41.7545 43.2123 42.0003 42.6188 42.0003 42C42.0003 41.3812 41.7545 40.7877 41.3169 40.3501C40.8793 39.9125 40.2858 39.6667 39.667 39.6667ZM34.7172 37.0503C36.03 35.7375 37.8105 35 39.667 35C41.5235 35 43.304 35.7375 44.6167 37.0503C45.9295 38.363 46.667 40.1435 46.667 42C46.667 43.8565 45.9295 45.637 44.6167 46.9497C43.304 48.2625 41.5235 49 39.667 49C37.8105 49 36.03 48.2625 34.7172 46.9497C33.4045 45.637 32.667 43.8565 32.667 42C32.667 40.1435 33.4045 38.363 34.7172 37.0503Z" fill="#78B548"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M33.9564 30.5789C35.109 30.0026 36.5106 30.4698 37.0869 31.6224L39.4202 36.289C39.9965 37.4417 39.5293 38.8432 38.3767 39.4195C37.2241 39.9959 35.8225 39.5287 35.2462 38.376L32.9129 33.7094C32.3366 32.5568 32.8037 31.1552 33.9564 30.5789Z" fill="#78B548"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M22.0434 30.5789C23.196 31.1552 23.6632 32.5568 23.0869 33.7094L16.0869 47.7094C15.5105 48.862 14.109 49.3292 12.9564 48.7529C11.8037 48.1766 11.3366 46.775 11.9129 45.6224L18.9129 31.6224C19.4892 30.4698 20.8907 30.0026 22.0434 30.5789Z" fill="#78B548"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M14 41.9993C14 40.7107 15.0447 39.666 16.3333 39.666H35C36.2887 39.666 37.3333 40.7107 37.3333 41.9993C37.3333 43.288 36.2887 44.3327 35 44.3327H16.3333C15.0447 44.3327 14 43.288 14 41.9993Z" fill="#78B548"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M35.0003 7C36.289 7 37.3337 8.04467 37.3337 9.33333V11.6667C37.3337 12.9553 36.289 14 35.0003 14C33.7117 14 32.667 12.9553 32.667 11.6667V9.33333C32.667 8.04467 33.7117 7 35.0003 7Z" fill="#78B548"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M28.0003 7C29.289 7 30.3337 8.04467 30.3337 9.33333V11.6667C30.3337 12.9553 29.289 14 28.0003 14C26.7117 14 25.667 12.9553 25.667 11.6667V9.33333C25.667 8.04467 26.7117 7 28.0003 7Z" fill="#78B548"/>
          <path fill-rule="evenodd" clip-rule="evenodd" d="M21.0003 7C22.289 7 23.3337 8.04467 23.3337 9.33333V11.6667C23.3337 12.9553 22.289 14 21.0003 14C19.7117 14 18.667 12.9553 18.667 11.6667V9.33333C18.667 8.04467 19.7117 7 21.0003 7Z" fill="#78B548"/>
        </g>
        <defs>
          <clipPath id="clip0_1501_9875">
            <rect width="56" height="56" fill="white"/>
          </clipPath>
        </defs>
      </svg>
      <div>
        <h3 class="title !mt-0">Parrillas</h3>
        <p class="text-[12px] text-[#003C3E]">Espacios para disfrutar una buena comida.</p>
      </div>
      </div>
    <div>
    <button class="btn-action flex items-center gap-2">Nueva Reserva</button>
    </div>
  </div>
  <div class="bg-[#003C3E] text-white rounded-lg overflow-hidden">
    <div class="p-4 font-normal">Mis reservas:</div>
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
      <a href="{{ route('reservas.parrillas.agregar-invitados') }}"
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

@endsection