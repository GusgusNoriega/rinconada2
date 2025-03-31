@extends('layout.layout')

@section('title', 'Reservas | Rinconada')

@section('content')
    <div class="flex items-center justify-between py-8">
        <div class="flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                <g clip-path="url(#clip0_1691_9709)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M24.7009 6.0348C25.5761 5.15963 26.7631 4.66797 28.0008 4.66797C29.2385 4.66797 30.4254 5.15963 31.3006 6.0348C32.1758 6.90997 32.6674 8.09696 32.6674 9.33464C32.6674 10.5723 32.1758 11.7593 31.3006 12.6345C30.4254 13.5096 29.2385 14.0013 28.0008 14.0013C26.7631 14.0013 25.5761 13.5096 24.7009 12.6345C23.8258 11.7593 23.3341 10.5723 23.3341 9.33464C23.3341 8.09696 23.8258 6.90997 24.7009 6.0348ZM21.4609 36.4143C22.6136 36.9906 23.0807 38.3922 22.5044 39.5448L20.7544 43.0448C20.2839 43.9859 19.2416 44.4957 18.2098 44.2893L6.54317 41.956C5.27953 41.7033 4.46003 40.474 4.71275 39.2104C4.96548 37.9467 6.19474 37.1272 7.45838 37.38L17.3775 39.3638L18.3304 37.4578C18.9068 36.3052 20.3083 35.838 21.4609 36.4143ZM21.0325 32.2844L22.8101 21.619L16.3341 22.9142V28.0013C16.3341 29.29 15.2894 30.3346 14.0008 30.3346C12.7121 30.3346 11.6674 29.29 11.6674 28.0013V21.0013C11.6674 19.889 12.4525 18.9314 13.5432 18.7133L25.1572 16.3905C25.4241 16.3306 25.7057 16.317 25.9915 16.3572C26.0113 16.36 26.0312 16.3631 26.051 16.3664L26.099 16.3749C26.5874 16.4666 27.0127 16.7052 27.3365 17.0372L33.9279 23.6286L40.4053 25.7877C41.6278 26.1952 42.2886 27.5166 41.881 28.7392C41.4735 29.9617 40.1521 30.6224 38.9296 30.2149L31.9296 27.8816C31.5859 27.767 31.2737 27.574 31.0175 27.3179L27.2236 23.524L25.8689 31.6524L34.0674 37.8013C34.655 38.242 35.0008 38.9335 35.0008 39.668V49.0013C35.0008 50.29 33.9561 51.3346 32.6674 51.3346C31.3788 51.3346 30.3341 50.29 30.3341 49.0013V40.8346L21.9341 34.5346C21.2369 34.0118 20.8893 33.144 21.0325 32.2844ZM46.3257 46.3263C46.1069 46.5451 45.8102 46.668 45.5008 46.668C45.1914 46.668 44.8946 46.5451 44.6758 46.3263C44.457 46.1075 44.3341 45.8107 44.3341 45.5013C44.3341 45.1919 44.457 44.8951 44.6758 44.6763C44.8946 44.4576 45.1914 44.3346 45.5008 44.3346C45.8102 44.3346 46.1069 44.4576 46.3257 44.6763C46.5445 44.8951 46.6674 45.1919 46.6674 45.5013C46.6674 45.8107 46.5445 46.1075 46.3257 46.3263Z"
                        fill="#78B548" />
                </g>
                <defs>
                    <clipPath id="clip0_1691_9709">
                        <rect width="56" height="56" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <div>
                <h3 class="title !mt-0">Deportes</h3>
                <p class="text-[12px] text-[#003C3E]">Reserva tu academia o un espacio deportivo.</p>
            </div>
        </div>
    </div>
    <div class="flex flex-wrap gap-6 w-full items-center justify-start">
        <div
            class="bg-white rounded-xl shadow-lg hover:shadow-xl px-10 py-11 text-center w-full transition-all group max-w-[285px]">
            <h2 class="text-lg font-bold text-[#78B548]">Academias Deportivas</h2>
            <div class="my-6 flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="49" viewBox="0 0 45 49" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M20.1819 2.72292C20.9674 1.9374 22.0328 1.49609 23.1437 1.49609C24.2546 1.49609 25.32 1.9374 26.1056 2.72292C26.8911 3.50845 27.3324 4.57385 27.3324 5.68475C27.3324 6.79566 26.8911 7.86106 26.1056 8.64658C25.32 9.43211 24.2546 9.87341 23.1437 9.87341C22.0328 9.87341 20.9674 9.43211 20.1819 8.64658C19.3964 7.86106 18.9551 6.79566 18.9551 5.68475C18.9551 4.57385 19.3964 3.50845 20.1819 2.72292ZM23.1437 5.32052C23.0471 5.32052 22.9545 5.3589 22.8862 5.4272C22.8179 5.49551 22.7795 5.58815 22.7795 5.68475C22.7795 5.78135 22.8179 5.874 22.8862 5.9423C22.9545 6.01061 23.0471 6.04898 23.1437 6.04898C23.2403 6.04898 23.333 6.01061 23.4013 5.9423C23.4696 5.874 23.508 5.78135 23.508 5.68475C23.508 5.58815 23.4696 5.49551 23.4013 5.4272C23.333 5.3589 23.2403 5.32052 23.1437 5.32052Z"
                        fill="#003C3E" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M16.7953 33.115C17.7895 33.5932 18.1924 34.7562 17.6953 35.7126L15.8985 39.1699C15.4926 39.9508 14.5937 40.3738 13.7038 40.2026L1.72464 37.8977C0.634759 37.688 -0.0720622 36.668 0.145915 35.6194C0.363891 34.5709 1.42412 33.8909 2.51401 34.1006L12.9858 36.1155L14.0953 33.9808C14.5923 33.0244 15.8012 32.6368 16.7953 33.115Z"
                        fill="#003C3E" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M21.2375 13.0428C22.2499 13.2224 22.9338 14.2411 22.7651 15.3183L20.7385 28.2564L28.684 34.597C29.1519 34.9705 29.4273 35.5565 29.4273 36.1789V45.5947C29.4273 46.6868 28.5953 47.5721 27.569 47.5721C26.5426 47.5721 25.7106 46.6868 25.7106 45.5947V37.1676L17.6047 30.6989C17.0495 30.2558 16.7726 29.5204 16.8867 28.7919L19.099 14.6682C19.2677 13.591 20.2252 12.8633 21.2375 13.0428Z"
                        fill="#003C3E" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M20.5595 13.0548C21.1963 12.9227 21.8546 13.1293 22.3139 13.6053L28.9266 20.459L35.4285 22.7053C36.4462 23.0569 36.9962 24.1969 36.6569 25.2517C36.3177 26.3065 35.2177 26.8765 34.2 26.5249L27.2631 24.1283C26.9771 24.0295 26.7171 23.863 26.5039 23.642L20.302 17.2141L11.3212 19.0757V24.6151C11.3212 25.7269 10.4516 26.6282 9.37886 26.6282C8.30614 26.6282 7.43652 25.7269 7.43652 24.6151V17.4254C7.43652 16.4657 8.09004 15.6395 8.99794 15.4513L20.5595 13.0548Z"
                        fill="#003C3E" />
                    <path
                        d="M40.9456 43.3834C41.2233 43.3834 41.4897 43.2731 41.6861 43.0767C41.8824 42.8803 41.9928 42.614 41.9928 42.3362C41.9928 42.0585 41.8824 41.7922 41.6861 41.5958C41.4897 41.3994 41.2233 41.2891 40.9456 41.2891C40.6679 41.2891 40.4015 41.3994 40.2051 41.5958C40.0088 41.7922 39.8984 42.0585 39.8984 42.3362C39.8984 42.614 40.0088 42.8803 40.2051 43.0767C40.4015 43.2731 40.6679 43.3834 40.9456 43.3834Z"
                        fill="#003C3E" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M38.7248 40.1154C39.314 39.5263 40.113 39.1953 40.9462 39.1953C41.7794 39.1953 42.5784 39.5263 43.1676 40.1154C43.7567 40.7046 44.0877 41.5036 44.0877 42.3368C44.0877 43.17 43.7567 43.969 43.1676 44.5582C42.5784 45.1473 41.7794 45.4783 40.9462 45.4783C40.113 45.4783 39.314 45.1473 38.7248 44.5582C38.1357 43.969 37.8047 43.17 37.8047 42.3368C37.8047 41.5036 38.1357 40.7046 38.7248 40.1154ZM40.9462 43.1339C41.1576 43.1339 41.3603 43.0499 41.5098 42.9004C41.6593 42.751 41.7433 42.5482 41.7433 42.3368C41.7433 42.1254 41.6593 41.9227 41.5098 41.7732C41.3603 41.6237 41.1576 41.5397 40.9462 41.5397C40.7348 41.5397 40.532 41.6237 40.3826 41.7732C40.2331 41.9227 40.1491 42.1254 40.1491 42.3368C40.1491 42.5482 40.2331 42.751 40.3826 42.9004C40.532 43.0499 40.7348 43.1339 40.9462 43.1339Z"
                        fill="#003C3E" />
                </svg>
            </div>
            <p class="text-[#003C3E] mb-6 text-[14px] min-h-[40px]">Ambiente acogedor para que te relajes.</p>
            <a href="{{ route('deportes.academias-deportivas') }}"
                class="block bg-[#003C3E] text-white py-3 w-full rounded-full text-sm font-medium group-hover:bg-teal-700 transition">
                Reservar
            </a>
        </div>
        <div
            class="bg-white rounded-xl shadow-lg hover:shadow-xl px-10 py-11 text-center w-full transition-all group max-w-[285px]">
            <h2 class="text-lg font-bold text-[#78B548]">Reserva deportiva</h2>
            <div class="my-6 flex justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="51" height="50" viewBox="0 0 51 50" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M15.5335 1.90301C18.5666 0.646644 21.8175 0 25.1006 0C28.3836 0 31.6345 0.646644 34.6677 1.90301C37.7008 3.15938 40.4568 5.00087 42.7783 7.32233C45.0997 9.64379 46.9412 12.3998 48.1976 15.4329C49.4539 18.4661 50.1006 21.717 50.1006 25C50.1006 28.283 49.4539 31.5339 48.1976 34.5671C46.9412 37.6002 45.0997 40.3562 42.7783 42.6777C40.4568 44.9991 37.7008 46.8406 34.6677 48.097C31.6345 49.3534 28.3836 50 25.1006 50C21.8175 50 18.5666 49.3534 15.5335 48.097C12.5004 46.8406 9.74438 44.9991 7.42292 42.6777C5.10145 40.3562 3.25996 37.6002 2.0036 34.5671C0.74723 31.5339 0.100586 28.283 0.100586 25C0.100586 21.717 0.74723 18.4661 2.0036 15.4329C3.25996 12.3998 5.10145 9.6438 7.42292 7.32233C9.74438 5.00087 12.5004 3.15938 15.5335 1.90301ZM25.1006 3.84615C22.3226 3.84615 19.5719 4.39332 17.0054 5.4564C14.4389 6.51948 12.1069 8.07766 10.1426 10.042C8.17824 12.0063 6.62006 14.3383 5.55698 16.9048C4.4939 19.4713 3.94674 22.222 3.94674 25C3.94674 27.778 4.4939 30.5287 5.55698 33.0952C6.62006 35.6617 8.17824 37.9937 10.1426 39.958C12.1069 41.9223 14.4389 43.4805 17.0054 44.5436C19.5719 45.6067 22.3226 46.1538 25.1006 46.1538C27.8785 46.1538 30.6293 45.6067 33.1958 44.5436C35.7623 43.4805 38.0943 41.9223 40.0586 39.958C42.0229 37.9937 43.5811 35.6617 44.6442 33.0952C45.7073 30.5287 46.2544 27.778 46.2544 25C46.2544 22.222 45.7073 19.4713 44.6442 16.9048C43.5811 14.3383 42.0229 12.0063 40.0586 10.042C38.0943 8.07766 35.7623 6.51948 33.1958 5.4564C30.6293 4.39332 27.8785 3.84615 25.1006 3.84615Z"
                        fill="#003C3E" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M24.1552 23.3269C25.0801 22.8048 26.2532 23.1312 26.7753 24.0561C28.5958 27.2807 31.3378 29.8882 34.6498 31.5442C37.9619 33.2002 41.6931 33.8294 45.365 33.351C46.4182 33.2138 47.3832 33.9563 47.5204 35.0095C47.6576 36.0627 46.9151 37.0277 45.8619 37.1649C41.4302 37.7423 36.9271 36.983 32.9298 34.9843C28.9325 32.9856 25.6231 29.8387 23.426 25.947C22.9039 25.0221 23.2304 23.849 24.1552 23.3269Z"
                        fill="#003C3E" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.7156 27.1187C13.6693 26.6511 14.8214 27.0452 15.2889 27.9988C17.2537 32.0065 20.1217 35.5036 23.6672 38.2149C27.2128 40.9262 31.3391 42.7777 35.7216 43.6238C36.7644 43.8252 37.4466 44.8338 37.2453 45.8766C37.0439 46.9194 36.0353 47.6016 34.9925 47.4003C30.0257 46.4413 25.3492 44.3429 21.3309 41.2701C17.3126 38.1973 14.0622 34.234 11.8355 29.6919C11.3679 28.7383 11.762 27.5862 12.7156 27.1187Z"
                        fill="#003C3E" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.541 26.7869C16.2705 24.3246 20.6504 23.0321 25.1192 23.0753C26.1812 23.0855 27.0338 23.9548 27.0236 25.0168C27.0134 26.0788 26.1441 26.9315 25.0821 26.9212C21.3793 26.8855 17.7503 27.9564 14.6602 29.9966C11.57 32.0368 9.15957 34.9534 7.73783 38.3725C7.33004 39.3532 6.20446 39.8176 5.22378 39.4098C4.2431 39.002 3.77868 37.8765 4.18648 36.8958C5.90237 32.7693 8.81152 29.2493 12.541 26.7869Z"
                        fill="#003C3E" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M12.8937 13.5985C17.5643 11.6551 22.6223 10.8221 27.6695 11.1651C28.7292 11.2371 29.5298 12.1545 29.4578 13.2141C29.3858 14.2738 28.4684 15.0744 27.4088 15.0024C22.9553 14.6997 18.4924 15.4347 14.3712 17.1495C10.25 18.8643 6.58301 21.5121 3.65876 24.8846C2.96297 25.687 1.74842 25.7735 0.945985 25.0777C0.143548 24.3819 0.0570926 23.1674 0.752881 22.3649C4.06703 18.5428 8.22297 15.5419 12.8937 13.5985Z"
                        fill="#003C3E" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.5578 0.579512C23.4012 -0.0659074 24.6082 0.0946538 25.2537 0.938135C27.9694 4.48732 29.5634 8.76668 29.8312 13.2277C30.099 17.6887 29.0285 22.128 26.7569 25.9766C26.217 26.8912 25.0379 27.1951 24.1232 26.6552C23.2086 26.1153 22.9048 24.9362 23.4447 24.0216C25.3269 20.8327 26.2139 17.1544 25.992 13.4582C25.7701 9.76191 24.4494 6.21616 22.1991 3.2754C21.5537 2.43192 21.7143 1.22493 22.5578 0.579512Z"
                        fill="#003C3E" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M37.1108 4.04354C38.1147 3.69657 39.2097 4.22905 39.5566 5.23286C41.2092 10.0138 41.7297 15.113 41.0773 20.1292C40.425 25.1454 38.6175 29.9418 35.797 34.141C35.2048 35.0227 34.0101 35.2574 33.1284 34.6652C32.2467 34.073 32.012 32.8782 32.6042 31.9966C35.0928 28.2914 36.6877 24.0592 37.2633 19.6332C37.8389 15.2071 37.3796 10.7078 35.9215 6.48934C35.5746 5.48553 36.107 4.3905 37.1108 4.04354Z"
                        fill="#003C3E" />
                </svg>
            </div>
            <p class="text-[#003C3E] mb-6 text-[14px] min-h-[40px]">Un refugio para conectar con la naturaleza.</p>
            <a href="{{ route('deportes.reserva-deportiva') }}"
                class="block bg-[#003C3E] text-white py-3 w-full rounded-full text-sm font-medium group-hover:bg-teal-700 transition">
                Reservar
            </a>
        </div>
    </div>

    <div class="flex items-center justify-between pb-8 pt-18">
        <div class="flex items-center gap-4">
            <div>
                <h3 class="title !mt-0">Mis reservas</h3>
                <p class="text-[12px] text-[#003C3E]">Consulta y administra tus reservas fácilmente para disfrutar de una
                    experiencia exclusiva en nuestro Country Club</p>
            </div>
        </div>
        <a href="{{ route('deportes.historial') }}" class="text-[#78B548] hover:underline">Historial de Reservas</a>

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
                    <span
                        class="border border-[#6A6107] text-[#6A6107] bg-[#F2EB9F] p-1 rounded-[8px] text-sm ">Reservado</span>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
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
