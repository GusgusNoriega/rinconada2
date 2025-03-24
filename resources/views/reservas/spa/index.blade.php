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

  <div class="grid grid-cols-[repeat(auto-fill,_minmax(245px,_1fr))] gap-6 place-items-center">
    <div class="bg-white rounded-xl shadow-lg hover:shadow-xl px-10 py-11 text-center w-full transition-all group">
      <h2 class="text-lg font-bold text-[#78B548]">Masajes y Terapias</h2>
      <div class="my-6 flex justify-center">
          <img src="imgs/spa1.svg" alt="Icono de masaje" class="h-[70px] w-auto">
      </div>
      <p class="text-[#003C3E] mb-6 text-[14px] min-h-[40px]">Ambiente acogedor para que te relajes.</p>
      <button class="bg-[#003C3E] text-white py-3 w-full rounded-full text-sm font-medium group-hover:bg-teal-700 transition">
          Reservar
      </button>
    </div>
    <div class="bg-white rounded-xl shadow-lg hover:shadow-xl px-10 py-11 text-center w-full transition-all group">
      <h2 class="text-lg font-bold text-[#78B548]">Cosmiatría</h2>
      <div class="my-6 flex justify-center">
          <img src="imgs/spa2.svg" alt="Icono de masaje" class="h-[70px] w-auto">
      </div>
      <p class="text-[#003C3E] mb-6 text-[14px] min-h-[40px]">Un refugio para conectar con la naturaleza.</p>
      <button class="bg-[#003C3E] text-white py-3 w-full rounded-full text-sm font-medium group-hover:bg-teal-700 transition">
          Reservar
      </button>
    </div>
    <div class="bg-white rounded-xl shadow-lg hover:shadow-xl px-10 py-11 text-center w-full transition-all group">
      <h2 class="text-lg font-bold text-[#78B548]">Sauna</h2>
      <div class="my-6 flex justify-center">
          <img src="imgs/spa3.svg" alt="Icono de masaje" class="h-[70px] w-auto">
      </div>
      <p class="text-[#003C3E] mb-6 text-[14px] min-h-[40px]">Disfruta un espacio cálido y revitalizante.</p>
      <button class="bg-[#003C3E] text-white py-3 w-full rounded-full text-sm font-medium group-hover:bg-teal-700 transition">
          Reservar
      </button>
    </div>
    <div class="bg-white rounded-xl shadow-lg hover:shadow-xl px-10 py-11 text-center w-full transition-all group">
      <h2 class="text-lg font-bold text-[#78B548]">Podología</h2>
      <div class="my-6 flex justify-center">
          <img src="imgs/spa4.svg" alt="Icono de masaje" class="h-[70px] w-auto">
      </div>
      <p class="text-[#003C3E] mb-6 text-[14px] min-h-[40px]">Cuida tus pies con expertos.</p>
      <button class="bg-[#003C3E] text-white py-3 w-full rounded-full text-sm font-medium group-hover:bg-teal-700 transition">
          Reservar
      </button>
    </div>
    <div class="bg-white rounded-xl shadow-lg hover:shadow-xl px-10 py-11 text-center w-full transition-all group">
      <h2 class="text-lg font-bold text-[#78B548]">Terapias</h2>
      <div class="my-6 flex justify-center">
          <img src="imgs/spa5.svg" alt="Icono de masaje" class="h-[70px] w-auto">
      </div>
      <p class="text-[#003C3E] mb-6 text-[14px] min-h-[40px]">Un refugio para conectar con la naturaleza.</p>
      <button class="bg-[#003C3E] text-white py-3 w-full rounded-full text-sm font-medium group-hover:bg-teal-700 transition">
          Reservar
      </button>
    </div>
  </div>


  <div class="flex items-center justify-between pb-8 pt-18">
    <div class="flex items-center gap-4">
    <div>
      <h3 class="title !mt-0">Mis reservas</h3>
      <p class="text-[12px] text-[#003C3E]">Consulta y administra tus reservas fácilmente para disfrutar de una experiencia exclusiva en nuestro Country Club</p>
    </div>
    </div>
    <div>
    <button class="text-[#78B548]">Historial de Reservas</button>
    </div>
  </div>
  <div class="bg-[#003C3E] text-white rounded-lg overflow-hidden">
    <div class="grid grid-cols-6 text-[#fff] font-semibold  p-3 place-items-center">
      <div>Servicio</div>
      <div>Nº de Sesion</div>
      <div>Terapeuta</div>
      <div>Fecha</div>
      <div>Hora</div>
      <div>Estado</div>
    </div>
    <div class="divide-y divide-gray-300 bg-gray-50">
    <div class="grid grid-cols-6 p-3 place-items-center text-[#003C3E] text-[14px] font-medium">
      <div>Masajes Integrales (6)</div>
      <div>Sesión 2</div>
      <div>Sofía Villanueva Sol</div>
      <div>21/03/2025</div>
      <div>12:34 pm</div>
      <div>
      <button
        class="border border-[#6A6107] text-[#6A6107] bg-[#F2EB9F] px-3 py-1 rounded-[8px] text-sm hover:bg-[#6A6107] hover:text-white duration-300 transition-colors ease-in-out">Reservado</button>
      </div>
    </div>
    </div>
  </div>

@endsection