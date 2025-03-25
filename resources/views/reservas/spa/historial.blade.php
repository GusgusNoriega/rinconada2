@extends('layout.layout')

@section('title', 'Spa - Historial | Rinconada')

@section('content')
    <div class="flex items-center justify-between py-8">
        <div class="flex items-center gap-4">

            <div>
                <h3 class="title !mt-0">Historial de Reservas</h3>
                <p class="text-[12px] text-[#003C3E]">Consulta y administra tus reservas fácilmente para disfrutar de una
                    experiencia exclusiva en nuestro Country Club</p>
            </div>
        </div>
    </div>
    <div class="bg-[#003C3E] text-white rounded-lg overflow-hidden">
        <div class="grid grid-cols-6  font-semibold p-3 place-items-center">
            <div>Reserva</div>
            <div>Nº de Sesion</div>
            <div>Terapeuta</div>
            <div>Fecha</div>
            <div>Hora</div>
            <div>Estado</div>
        </div>
        <div class="divide-y divide-gray-300 bg-[#F3FCFF]">
            <div class="grid grid-cols-6 gap-2 py-4 px-8 items-center border-b text-[#003C3E] text-center">
                <div class="line-clamp-1">Masajes Integrales (6)</div>
                <div class="line-clamp-1"><span>Sesión 3</span></div>
                <div class="line-clamp-1">Sofía Villanueva Sol</div>
                <div class="line-clamp-1">21/03/2025</div>
                <div class="line-clamp-1">12:34 pm</div>
                <div class="flex items-center justify-center">
                    <span
                        class="border border-[#41870C] text-[#41870C] bg-[#E2F7D0] p-1 rounded-[8px] text-sm">Realizado</span>
                </div>
            </div>
        </div>
        <div class="divide-y divide-gray-300 bg-[#F3FCFF]">
            <div class="grid grid-cols-6 gap-2 py-4 px-8 items-center border-b text-[#003C3E] text-center">
                <div class="line-clamp-1">Podología</div>
                <div class="line-clamp-1"><span>-</span></div>
                <div class="line-clamp-1">Sofía Villanueva Sol</div>
                <div class="line-clamp-1">21/03/2025</div>
                <div class="line-clamp-1">12:34 pm</div>
                <div class="flex items-center justify-center">
                    <span
                        class="border border-[#41870C] text-[#41870C] bg-[#E2F7D0] p-1 rounded-[8px] text-sm">Realizado</span>
                </div>
            </div>
        </div>
        <div class="divide-y divide-gray-300 bg-[#F3FCFF]">
            <div class="grid grid-cols-6 gap-2 py-4 px-8 items-center border-b text-[#003C3E] text-center">
                <div class="line-clamp-1">Magnetoterapia (6)</div>
                <div class="line-clamp-1"><span>Sesión 1</span></div>
                <div class="line-clamp-1">Sofía Villanueva Sol</div>
                <div class="line-clamp-1">21/03/2025</div>
                <div class="line-clamp-1">12:34 pm</div>
                <div class="flex items-center justify-center">
                    <span
                        class="border border-[#41870C] text-[#41870C] bg-[#E2F7D0] p-1 rounded-[8px] text-sm">Realizado</span>
                </div>
            </div>
        </div>
        <div class="divide-y divide-gray-300 bg-[#F3FCFF]">
            <div class="grid grid-cols-6 gap-2 py-4 px-8 items-center border-b text-[#003C3E] text-center">
                <div class="line-clamp-1">Terapia Manual</div>
                <div class="line-clamp-1"><span>-</span></div>
                <div class="line-clamp-1">Sofía Villanueva Sol</div>
                <div class="line-clamp-1">21/03/2025</div>
                <div class="line-clamp-1">12:34 pm</div>
                <div class="flex items-center justify-center">
                    <span
                        class="border border-[#41870C] text-[#41870C] bg-[#E2F7D0] p-1 rounded-[8px] text-sm">Realizado</span>
                </div>
            </div>
        </div>
        <div class="divide-y divide-gray-300 bg-[#F3FCFF]">
            <div class="grid grid-cols-6 gap-2 py-4 px-8 items-center border-b text-[#003C3E] text-center">
                <div class="line-clamp-1">Terapia Maxilofacial</div>
                <div class="line-clamp-1"><span>-</span></div>
                <div class="line-clamp-1">Sofía Villanueva Sol</div>
                <div class="line-clamp-1">21/03/2025</div>
                <div class="line-clamp-1">12:34 pm</div>
                <div class="flex items-center justify-center">
                    <span
                        class="border border-[#41870C] text-[#41870C] bg-[#E2F7D0] p-1 rounded-[8px] text-sm">Realizado</span>
                </div>
            </div>
        </div>
    </div>
@endsection
