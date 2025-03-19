@extends('layout.layout')

@section('title', 'Inicio')

@section('content')
  <div class="my-8 w-full h-[165px] rounded-2xl overflow-hidden bg-[#F9FFEA] flex items-center">
    <div class="p-6 w-[60%] h-full">
    <h2 class="title !mt-0">¡Bienvenido!</h2>
    <p class="text-[#00161A] mt-2 font-normal line-clamp-3">
      Lorem ipsum dolor sit amet consectetur. Phasellus malesuada porttitor congue sit in auctor purus.
      Purus arcu quam viverra nibh. Sit lacus ac lectus turpis viverra placerat ultricies turpis.
    </p>
    </div>
    <div class="w-[40%] h-full relative">
    <div
      class="w-full h-[165px] absolute top-0 left-[-5px] bg-gradient-to-r from-[#F9FFEA] via-[#F9FFEAa8] to-[#F9FFEA00]">
    </div>
    <img src="imgs/cancha1.webp" alt="Imagen de canchas de tenis" class="h-full w-full object-cover">
    </div>
  </div>
  <div class="title">Rinconews</div>
  <div class="w-full bg-[#F3FCFF] rounded-[16px] p-6 mt-4">
    <div class="space-y-6">
    <div class="flex flex-col md:flex-row gap-4 items-start border-b-[2px] border-solid border-[#003C3E]/30 pb-6">
      <div class="w-full md:w-[180px] h-[110px] bg-white rounded-[15px] flex items-center justify-center aspect-video">
      <img src="" alt="">
      </div>
      <div class="">
      <p class="text-[#003C3E] text-sm opacity-50">Hoy 17:30 pm</p>
      <p class="text-[#003C3E] mt-1 font-semibold max-w-[400px]">
        Lorem ipsum dolor sit amet consectetur. Phasellus malesuada porttitor congue sit in auctor purus.
        Purus arcu q
      </p>
      </div>
    </div>
    <div class="flex flex-col md:flex-row gap-4 items-start border-b-[2px] border-solid border-[#003C3E]/30 pb-6">
      <div class="w-full md:w-[180px] h-[110px] bg-white rounded-[15px] flex items-center justify-center aspect-video">
      <img src="" alt="">
      </div>
      <div class="">
      <p class="text-[#003C3E] text-sm opacity-50">Hoy 17:30 pm</p>
      <p class="text-[#003C3E] mt-1 font-semibold max-w-[400px]">
        Lorem ipsum dolor sit amet consectetur. Phasellus malesuada porttitor congue sit in auctor purus.
        Purus arcu q
      </p>
      </div>
    </div>
    <div class="flex flex-col md:flex-row gap-4 items-start border-b-[2px] border-solid border-[#003C3E]/30 pb-6">
      <div class="w-full md:w-[180px] h-[110px] bg-white rounded-[15px] flex items-center justify-center aspect-video">
      <img src="" alt="">
      </div>
      <div class="">
      <p class="text-[#003C3E] text-sm opacity-50">Hoy 17:30 pm</p>
      <p class="text-[#003C3E] mt-1 font-semibold max-w-[400px]">
        Lorem ipsum dolor sit amet consectetur. Phasellus malesuada porttitor congue sit in auctor purus.
        Purus arcu q
      </p>
      </div>
    </div>
    <div class="flex flex-col md:flex-row gap-4 items-start">
      <div class="w-full md:w-[180px] h-[110px] bg-white rounded-[15px] flex items-center justify-center aspect-video">
      <img src="" alt="">
      </div>
      <div class="">
      <p class="text-[#003C3E] text-sm opacity-50">Hoy 17:30 pm</p>
      <p class="text-[#003C3E] mt-1 font-semibold max-w-[400px]">
        Lorem ipsum dolor sit amet consectetur. Phasellus malesuada porttitor congue sit in auctor purus.
        Purus arcu q
      </p>
      </div>
    </div>
    </div>
  </div>
@endsection