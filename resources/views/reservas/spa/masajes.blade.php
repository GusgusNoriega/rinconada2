@extends('layout.layout')

@section('title', 'Spa')

@section('content')
    <div class="flex items-center justify-between py-8">
        <div class="flex items-center gap-4">
            <svg xmlns="http://www.w3.org/2000/svg" width="56" height="56" viewBox="0 0 56 56" fill="none">
                <g clip-path="url(#clip0_1671_11163)">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6.03358 36.3668C6.90876 35.4917 8.09574 35 9.33342 35C10.5711 35 11.7581 35.4917 12.6332 36.3668C13.5084 37.242 14.0001 38.429 14.0001 39.6667C14.0001 40.9043 13.5084 42.0913 12.6332 42.9665C11.7581 43.8417 10.5711 44.3333 9.33342 44.3333C8.09574 44.3333 6.90876 43.8417 6.03358 42.9665C5.15841 42.0913 4.66675 40.9043 4.66675 39.6667C4.66675 38.429 5.15841 37.242 6.03358 36.3668Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M17.7001 8.36684C18.5753 7.49167 19.7622 7 20.9999 7C22.2376 7 23.4246 7.49167 24.2997 8.36684C25.1749 9.242 25.6666 10.429 25.6666 11.6667C25.6666 12.9043 25.1749 14.0913 24.2997 14.9665C23.4246 15.8417 22.2376 16.3333 20.9999 16.3333C19.7622 16.3333 18.5753 15.8417 17.7001 14.9665C16.8249 14.0913 16.3333 12.9043 16.3333 11.6667C16.3333 10.429 16.8249 9.242 17.7001 8.36684Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M16.3334 39.6654C16.3334 38.3767 17.378 37.332 18.6667 37.332H46.6667C47.9554 37.332 49 38.3767 49 39.6654C49 40.954 47.9554 41.9987 46.6667 41.9987H21V46.6654C21 47.5492 20.5007 48.3571 19.7102 48.7524L10.3769 53.419C9.22424 53.9953 7.82267 53.5281 7.24636 52.3755C6.67005 51.2229 7.13724 49.8213 8.28986 49.245L16.3334 45.2233V39.6654Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M23.3333 46.6654C23.3333 45.3767 24.3779 44.332 25.6666 44.332H46.6666C47.9552 44.332 48.9999 45.3767 48.9999 46.6654C48.9999 47.954 47.9552 48.9987 46.6666 48.9987H25.6666C24.3779 48.9987 23.3333 47.954 23.3333 46.6654Z"
                        fill="#78B548" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M26.8771 16.62C27.4468 16.3072 28.1212 16.2462 28.7378 16.4518C33.0481 17.8885 35.2719 20.8527 36.3385 24.0525C37.3341 27.0394 37.3336 30.2736 37.3333 32.5389C37.3333 32.5814 37.3333 32.6236 37.3333 32.6654C37.3333 33.954 36.2886 34.9987 34.9999 34.9987C33.7113 34.9987 32.6666 33.954 32.6666 32.6654C32.6666 30.269 32.647 27.7353 31.9113 25.5282C31.4613 24.1783 30.7543 22.9791 29.5561 22.0614L27.9303 28.5646C27.7895 29.1277 27.4439 29.6182 26.9609 29.9402L19.9609 34.6068C18.8887 35.3216 17.44 35.0319 16.7251 33.9597C16.0103 32.8874 16.3001 31.4387 17.3723 30.7239L23.6217 26.5576L25.7363 18.0995C25.8939 17.4689 26.3074 16.9327 26.8771 16.62Z"
                        fill="#78B548" />
                </g>
                <defs>
                    <clipPath id="clip0_1671_11163">
                        <rect width="56" height="56" fill="white" />
                    </clipPath>
                </defs>
            </svg>
            <div>
                <h3 class="title !mt-0">Masajes</h3>
                <p class="text-[12px] text-[#003C3E]">Selecciona un servicio para continuar.</p>
            </div>
        </div>
        <div>
            <a href="{{ route('reservas.spa.reservar') }}" class="btn-action flex items-center gap-2">Continuar <svg
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
                </svg></a>
        </div>
    </div>

    <div>
        <div class="flex flex-col gap-3">
            <div class="flex items-center border-b border-gray-300 pb-2">
                <div class="checkbox-wrapper-65">
                    <label for="masaje1" class="!flex items-center">
                        <input id="masaje1" type="radio" name="masaje" class="hidden peer">
                        <span class="cbx peer-checked:opacity-100 opacity-50">
                            <svg viewBox="0 0 12 11" height="11px" width="12px">
                                <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                            </svg>
                        </span>
                        <span class="text-[#003C3E] peer-checked:opacity-100 opacity-50">Masaje Descontracturante</span>
                    </label>
                </div>
            </div>

            <div class="flex items-center border-b border-gray-300 pb-2">
                <div class="checkbox-wrapper-65">
                    <label for="masaje2" class="!flex items-center">
                        <input id="masaje2" type="radio" name="masaje" class="hidden peer">
                        <span class="cbx peer-checked:opacity-100 opacity-50">
                            <svg viewBox="0 0 12 11" height="11px" width="12px">
                                <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                            </svg>
                        </span>
                        <span class="text-[#003C3E] peer-checked:opacity-100 opacity-50">Masaje Relajante</span>
                    </label>
                </div>
            </div>

            <div class="flex items-center border-b border-gray-300 pb-2">
                <div class="checkbox-wrapper-65">
                    <label for="masaje3" class="!flex items-center">
                        <input id="masaje3" type="radio" name="masaje" class="hidden peer">
                        <span class="cbx peer-checked:opacity-100 opacity-50">
                            <svg viewBox="0 0 12 11" height="11px" width="12px">
                                <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                            </svg>
                        </span>
                        <span class="text-[#003C3E] peer-checked:opacity-100 opacity-50">Masaje Reductor</span>
                    </label>
                </div>
            </div>

            <div class="flex items-center border-b border-gray-300 pb-2">
                <div class="checkbox-wrapper-65">
                    <label for="masaje4" class="!flex items-center">
                        <input id="masaje4" type="radio" name="masaje" class="hidden peer">
                        <span class="cbx peer-checked:opacity-100 opacity-50">
                            <svg viewBox="0 0 12 11" height="11px" width="12px">
                                <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                            </svg>
                        </span>
                        <span class="text-[#003C3E] peer-checked:opacity-100 opacity-50">Masaje Integral (6
                            sesiones)</span>
                    </label>
                </div>
            </div>

            <div class="flex items-center border-b border-gray-300 pb-2">
                <div class="checkbox-wrapper-65">
                    <label for="masaje5" class="!flex items-center">
                        <input id="masaje5" type="radio" name="masaje" class="hidden peer">
                        <span class="cbx peer-checked:opacity-100 opacity-50">
                            <svg viewBox="0 0 12 11" height="11px" width="12px">
                                <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                            </svg>
                        </span>
                        <span class="text-[#003C3E] peer-checked:opacity-100 opacity-50">Terapia Geotermal</span>
                    </label>
                </div>
            </div>

            <div class="flex items-center pb-2">
                <div class="checkbox-wrapper-65">
                    <label for="masaje6" class="!flex items-center">
                        <input id="masaje6" type="radio" name="masaje" class="hidden peer">
                        <span class="cbx peer-checked:opacity-100 opacity-50">
                            <svg viewBox="0 0 12 11" height="11px" width="12px">
                                <polyline points="1 6.29411765 4.5 10 11 1"></polyline>
                            </svg>
                        </span>
                        <span class="text-[#003C3E] peer-checked:opacity-100 opacity-50">Reflexoterapia</span>
                    </label>
                </div>
            </div>
        </div>
    </div>

@endsection
