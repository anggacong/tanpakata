@extends('layouts.main')
@section('title', 'Zakaria Dan Jemari')
@push('css')
    <style>
        .image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 3s ease-in-out;
            /* Sesuaikan dengan durasi transisi yang diinginkan */
        }

        .fadeOut {
            opacity: 0;
        }
    </style>
@endpush
@section('content')

    <body class=" overflow-x-hidden">
        <section id="preLoader" class=" fixed top-0 left-0 w-screen h-screen  items-center justify-center bg-primarymini1-0  z-[99999] ">
            <div class="h-screen max-w-sm w-full mx-auto  flex justify-center items-center ">
                <div class="animate-pulse ">
                    <div class="svg mb-5 flex justify-center items-center">
                        <svg width='50px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 693 513">
                            <defs>
                                <style>
                                    .cls-surat-1 {
                                        fill: none;
                                        stroke: #F4F5F0;
                                        stroke-miterlimit: 10;
                                        stroke-width: 40px;
                                    }

                                    .cls-surat-love {
                                        fill: #F4F5F0;
                                        stroke: none;
                                        stroke-miterlimit: 10;
                                        stroke-width: 40px;
                                    }
                                </style>
                            </defs>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <path class="cls-surat-1" d="M326,350,59,48l566,4Z" />
                                    <rect class="cls-surat-1" x="20" y="20" width="653" height="473" rx="36.53" />
                                    <path class="cls-surat-1" d="M616,480,74,477,327,257Z" />
                                    <path class="cls-surat-love" d="M330.5,422,216.61,308.07c-98.93-98.92,15-212.82,113.89-113.9,105.78-105.78,219.68,8.12,113.89,113.9Z" />
                                </g>
                            </g>
                        </svg>
                    </div>
                    <div class="loading flex justify-center items-center">
                        <p class="text-xl text-[#F4F5F0] font-poppins font-medium">Loading
                            <span class="animate-blink" style="animation-delay: 0.2s;">.</span>
                            <span class="animate-blink" style="animation-delay: 0.4s;">.</span>
                            <span class="animate-blink" style="animation-delay: 0.6s;">.</span>
                        </p>
                    </div>

                </div>
            </div>
        </section>
        <section class="overflow-hidden" id="cover">
            <div class="">
                <div id="open" class="z-[9999] w-screen h-screen fixed left-0  top-0 bg-cover bg-center"
                    style="background-image: url('{{ asset('img/jemari/2.jpg') }}')">
                    <div class="w-full  absolute h-full -z-10 bg-gradient-to-b from-gray-100 via-gray-400 to-gray-600 mix-blend-multiply">
                    </div>
                    <div class="flex flex-wrap justify-end items-end pb-36 h-screen ">
                        <div class="w-full  text-center">
                            <h1 data-aos="zoom-in-out" data-aos-duration="3000" class="font-poppins  font-thin mb-3 text-sm text-white tracking-[0.50rem]">THE WEDDING OF</h1>
                            <h1 data-aos="zoom-in-out" data-aos-duration="3000" class="font-poppins text-2xl mb-3 font-bold text-white">Zakaria & Jemari</h1>
                            <p id="invitingName" data-aos="zoom-in-out" data-aos-duration="3000" class="font-poppins text-base mb-5 font-bold text-white">Nama Tamu</p>
                            <button data-aos="zoom-in-out" data-aos-duration="3000" id="buttonOpen"
                                class="bg-[#8C806E]  rounded-sm p-3 font-poppins font-semibold text-center inline-flex items-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21.75 9v.906a2.25 2.25 0 01-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 001.183 1.981l6.478 3.488m8.839 2.51l-4.66-2.51m0 0l-1.023-.55a2.25 2.25 0 00-2.134 0l-1.022.55m0 0l-4.661 2.51m16.5 1.615a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V8.844a2.25 2.25 0 011.183-1.98l7.5-4.04a2.25 2.25 0 012.134 0l7.5 4.04a2.25 2.25 0 011.183 1.98V19.5z" />
                                </svg>
                                <span class="ml-2">OPEN</span>
                            </button>
                        </div>


                    </div>
                </div>
            </div>
        </section>

        <main class="container-lg md:relative md:flex md:flex-wrap md:justify-end ">
            {{-- Image Left Fixed --}}
            <section id="imageLeft" class="bg-secondarymini1-0 bg-blend-multiply w-2/3 z-50 h-screen fixed left-0 top-0 bottom-0 bg-cover bg-center hidden md:block "
                style="background-image: url('{{ asset('img/jemari/5.jpg') }}')">
                <div class="w-2/4 mx-auto mt-60">
                    <h1 class="text-lg font-poppins text-white text-justify">"Hari pernikahan adalah permulaan dari kisah cinta abadi kita. Selama menunggu, aku belajar
                        tentang kesabaran dan ketulusan cinta yang tak tergoyahkan"</h1>
                    <h1 class="text-base font-poppins text-white text-center mt-10">Inviting</h1>
                    <h1 id="inviting" class="text-lg font-poppins text-white text-center ">Nama Tamu</h1>
                </div>
            </section>
            {{-- Image Left Fixed --}}

            {{-- Content Right --}}
            <section class="w-full md:w-1/3">
                <section id="home-cover">
                    <div class="w-full  left-0 top-0 bg-cover bg-center">
                        <div id="image-container" class="relative w-full ">
                            <img src="{{ asset('img/jemari/3.jpg') }}" class="image" />
                            <img src="{{ asset('img/jemari/2.JPG') }}" class="image  fadeOut" />
                            <div class="w-full  h-1/2 bottom-0 absolute bg-gradient-to-t from-[#b7b1a4] via-[#b7b1a4de] to-[#ffffff00]">
                            </div>
                            <div class="text-wedding">
                                <div class="relative">
                                    <div class="flex flex-wrap items-end  " style="padding-bottom:10px;">
                                        <div class="w-full text-center ">
                                            <h1 class="font-poppins pt-96 font-medium text-sm text-white tracking-[0.50rem]">THE WEDDING OF</h1>
                                            <h1 class="font-playfair text-5xl  font-medium text-white">Zack & Jejem</h1>
                                            <p class="font-poppins text-sm  font-light text-white tracking-[0.20rem] mt-3">SAVE THE DATE | 10 Januari 2024</p>

                                            <div class="py-8 px-14 grid grid-cols-4 gap-1  text-center">
                                                <div class=" font-poppins font-light text-black py-5 bg-white rounded-md bg-opacity-70 text-sm leading-none"><span
                                                        class="font-bold" id="day">0</span>
                                                    <p class="leading-none font-light text-xs">Days</p>
                                                </div>
                                                <div class=" font-poppins font-light text-black py-5 bg-white rounded-md bg-opacity-70 text-xs leading-none"><span
                                                        class="font-bold" id="hour">0</span>
                                                    <p class="leading-none font-light text-xs">Hours</p>
                                                </div>
                                                <div class=" font-poppins font-light text-black py-5 bg-white rounded-md bg-opacity-70 text-xs leading-none"><span
                                                        class="font-bold" id="minute">0</span>
                                                    <p class="leading-none font-light text-xs">Minute</p>
                                                </div>
                                                <div class=" font-poppins font-light text-black py-5 bg-white rounded-md bg-opacity-70 text-xs leading-none"><span
                                                        class="font-bold" id="second">0</span>
                                                    <p class="leading-none font-light text-xs">Second</p>
                                                </div>
                                            </div>

                                            <div>
                                                <p class="text-white text-sm mb-2">Assalamu'alaikum wr wb</p>
                                                <p class="text-xs mb-10 text-white p-5">Segala Puji Bagi Allah SWT yang telah menjadikan hambanya hidup berpasang-pasangan.
                                                    Dengan memohon Ridho, Rahmat, dan Berkah Allah SWT, kami bermaksud untuk mengundang Saudara/i dalam acara pernikahan yang
                                                    kami selenggarakan.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="relative">
                            <div id="carousel-small" class="px-16 -mt-10">
                                <div class="swiper head-swiper">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide"><img class="rounded-full" src="{{ asset('img/jemari/kotak/1.jpg') }}" alt=""></div>
                                        <div class="swiper-slide"><img class="rounded-full" src="{{ asset('img/jemari/kotak/2.jpg') }}" alt=""></div>
                                        <div class="swiper-slide"><img class="rounded-full" src="{{ asset('img/jemari/kotak/3.jpg') }}" alt=""></div>
                                        <div class="swiper-slide"><img class="rounded-full" src="{{ asset('img/jemari/kotak/4.jpg') }}" alt=""></div>
                                        <div class="swiper-slide"><img class="rounded-full" src="{{ asset('img/jemari/kotak/5.jpg') }}" alt=""></div>
                                        <div class="swiper-slide"><img class="rounded-full" src="{{ asset('img/jemari/kotak/6.jpg') }}" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="section-surah ">
                    <div class=" -z-10 relative px-5 py-10">
                        <div class="absolute left-0 -top-10 w-full  opacity-10">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 299.44 220.28">
                                <defs>
                                    <style>
                                        .cls-stop {
                                            fill: #B7B1A4;
                                            stroke: none
                                        }
                                    </style>
                                </defs>
                                <g id="Layer_2" data-name="Layer 2">
                                    <g id="Layer_1-2" data-name="Layer 1">
                                        <path
                                            d="M126.8 14.71c-10.1-.57-24.83 3.72-31.27 16.62-3.74 7.49-5.21 18.94.73 27.48 10.53 15.14 38.94 13.37 45.68 2.1 3.16-5.29 2.17-14.4-1.42-19.56a15.27 15.27 0 0 0-6.38-5.35c-9.48-4.78-19.1-2.88-22.66 2.58-2.19 3.36-1.66 7.45-1.19 9.58 0 .34.41 6.53 5.73 9.44a11.44 11.44 0 0 0 13.08-1.76c5.15-10.55-3-14.56-6.31-11s1.49 3.67 1.49 3.67c-4.47 5.73-8.48-1.14-8.48-1.14 0-4.3 1.36-6.81 3.06-8.26 2.38-2 7.6-1.72 7.6-1.72s8.3 3.65 10.64 8.92c2 4.51-.48 10.56-3.76 14.47-5.39 6.42-27.06 8.25-29.24-7.11s2.64-23.16 16.63-27.17S144 35.92 144 35.92l1.49-6 4.13-7.8v28.7c.84 8.39-1 12.66-2.87 15-.78 1-2.73 3.06-2.73 5.93a7.49 7.49 0 0 0 1.24 3.82c2 3.32 4.55 11.85 4.55 11.85-6.75-13.38-21.4-8.71-26.1-6.78a33.44 33.44 0 0 1 3.9 0 34.35 34.35 0 0 1 4.74.6 3.39 3.39 0 1 1-.58 1.89 2.4 2.4 0 0 1 0-.28 34.76 34.76 0 0 0-8.58-.21c10.37 12.79 26.28 7.52 26.28 7.52-1.95 6.31-13.87 6.31-13.87 6.31 4.47 8.94 14.91 8.14 14.91 8.14-2.64 3.66-8.72.57-8.72.57a31.18 31.18 0 0 1 7.34 24.08c-.71 7-3.23 12.06-5.55 16.61a67 67 0 0 1-5.46 8.95c-3.78 16.63 6.08 19.61 6.08 19.61 7.34 6.76 7.87 14.56 7.87 14.56-4.62-8.83-8.9-11.7-8.9-11.7-12.73-6.53-7.57-23.73-7.57-23.73-11.58 15.59.92 35.08.92 35.08 16 19.72 13.26 31.65 13.26 31.65-4.59-18.81-15.13-29.2-15.13-29.2-14.5-25.09-1.43-40.09-1.43-40.09-1.14 1.07-8.86 4-8.86 4-13.23 4.28-15.36 13.07-15.36 13.07-2.29-8.86 9.63-18.11 9.63-18.11-6.72.3-11.61-6.73-11.61-6.73a64 64 0 0 0-23.7-12.91c6-2.3 22 2.75 22 2.75-.53-8.87 4.06-18.58 4.06-18.58 7-21-6.12-34.47-6.12-34.47 15.32 9.14 16.93 26.46 17 31.71l3.3-3.26a1.7 1.7 0 1 1 1.54 1 1.4 1.4 0 0 1-.41-.06l-3.95 3.81c2.81-.29 17-1 18.7 13.28 1.91 15.9-13.6 15.29-13.6 15.29-4.82-1-7.32-3-8.47-5.25a9.33 9.33 0 0 1-.58-6 21.18 21.18 0 0 1 2.4-5.75c13.37-5.58 9.93 7.72 9.93 7.72l-2.83-3.48c-.16 0-2.17-.12-3 1.19-1 1.48.13 3.74 1.53 4.73a5 5 0 0 0 5.88-.53c2.55-3.16 2.82-5.38 2.49-6.9-.57-2.59-3.41-5.56-3.41-5.56-15.74-8.56-17.88 9.48-17.88 9.48 2 20.33 22.78 11.16 22.78 11.16 14.82-9.17 5.8-27.21 5.8-27.21-2.9-12.69-35.92-37.76-35.92-37.76-14.16-7.7-18.36-20.5-19.46-29.48.06 1.57.18 3 .33 4.18A53 53 0 0 0 88 63.05a86.44 86.44 0 0 0 4.13 9.63 170.06 170.06 0 0 1 6.56 15.84c3.2 9.35 3.24 13.68 3.24 14.88a33 33 0 0 1-.65 6.35c.79 1.07 1.09 4.34.78 7-.47 4-2.55 8.29-3.78 8.08s-1.61-4.44-1.15-7.74c.43-3 1.76-6.3 2.9-7.34a36.53 36.53 0 0 0 .45-8.39A42.94 42.94 0 0 0 98 90.28c-2.21-6.85-3.86-9.4-7.28-17.37-3.13-7.27-4.69-10.9-5.68-14.79a51.3 51.3 0 0 1-1-5.09 52.38 52.38 0 0 0-.51 6.16 45.4 45.4 0 0 0 2 14c.89 3.57 3.79 15.28 3.83 18.82v.4a32.17 32.17 0 0 1-.66 6.34 14.5 14.5 0 0 1 .79 7c-.48 3.37-2.32 7.12-3.51 6.94s-1.67-3.86-1.42-6.6a14.38 14.38 0 0 1 2.9-7.33 36.67 36.67 0 0 0 .45-8.4c-.29-4.55-1.34-7.41-2.39-11.06a112.69 112.69 0 0 1-3.43-17.7C82 60.6 82 55.38 82 45c-1 4.29-1.37 9-1.83 15.62s-.12 10-1.22 18.6c-.25 2-.5 3.56-.67 4.62a13.11 13.11 0 0 1-.35 6.16c-1.05 3.43-3.7 6.74-4.78 6.33s-.78-4.78.52-8.09a15.57 15.57 0 0 1 3.15-4.92c.38-2.14.93-5.51 1.31-9.69.83-9 .1-10.6.69-19a69.4 69.4 0 0 1 1.63-11.51c-.74 2.1-1.66 4.77-2.66 8.07-.42 1.37-1 3.37-1.63 5.83-.75 2.87-1.19 5-1.29 5.46a56.48 56.48 0 0 0-1.21 6.88c-.26 3-.39 4.5-.4 5.33a10.7 10.7 0 0 1-.26 2.5 12.25 12.25 0 0 1-.74 2.13c-.88 1.86-3.55 5.78-4.88 5.29s-1.56-5 .53-8.09a8.41 8.41 0 0 1 3.33-2.85c.25-1.56.59-3.58 1-5.93.27-1.48.6-3.32 1.09-5.68C74 59 74.7 55.4 76 50.77c.71-2.5.63-1.91 1-3.27.72-2.79 1-4.81 1.33-6.35a148.13 148.13 0 0 1-18.4 5.78c-21.56 7.49-18.2 18.65-18.2 18.65C32.56 61 41 37.6 41 37.6l-4.89-7.68L32.1 22C19.41.76 0 2.21 0 2.21c28.78-6.3 43.34 2.87 43.34 2.87C46.55.15 63.86 1.19 63.86 1.19c9.4 6.21 41.73 6.64 41.73 6.64C101.07 13.17 82 11.61 78 11.56a24.87 24.87 0 0 1 2.2 1.51c.39.3.75.6 1.09.89a2 2 0 0 1 1-.28 2 2 0 1 1-1.71 1l-1.07-.85c-.8-.6-1.57-1.13-2.31-1.58a13.87 13.87 0 0 1 .13 3.22c-.08.93-.31 2.45-.31 2.45C70.17 43.72 51 32.25 49 28.35s-1-18.12 9.17-15.59 1.49 9.17 1.49 9.17c2.29-2.52-2.3-3.32-2.3-3.32-7.79 6.19 1.15 8.94 1.15 8.94 11 .57 12.15-8.9 12.15-8.9C72.31 12.23 65.27 8 57 7.49S32.41 17.73 46.78 33.17s38.83-5.05 38.83-5.05v-.05l.19-.24c.21-.24 29-19.43 29-19.43-5.24-7.83-34.55-4.89-34.55-4.89 60.23-9.93 70.48 15.29 70.48 15.29l-4.21 4.51L134.17 16a31 31 0 0 0-7.37-1.29Z"
                                            class="cls-stop" />
                                        <path
                                            d="M172.64 14.71c10.1-.57 24.82 3.72 31.27 16.62 3.74 7.49 5.21 18.94-.73 27.48-10.53 15.19-38.94 13.37-45.68 2.1-3.16-5.29-2.17-14.4 1.42-19.56A15.27 15.27 0 0 1 165.3 36c9.48-4.78 19.1-2.88 22.66 2.58 2.19 3.36 1.66 7.45 1.19 9.58 0 .34-.41 6.53-5.73 9.44a11.44 11.44 0 0 1-13.08-1.76c-5.16-10.55 3-14.56 6.31-11s-1.49 3.67-1.49 3.67c4.47 5.73 8.48-1.14 8.48-1.14 0-4.3-1.36-6.81-3.06-8.26-2.38-2-7.6-1.72-7.6-1.72s-8.3 3.65-10.64 8.92c-2 4.51.48 10.56 3.76 14.47 5.39 6.42 27.06 8.25 29.24-7.11s-2.64-23.16-16.63-27.17-23.27 9.4-23.27 9.4L154 30l-4.13-7.8v28.62c-.84 8.39 1 12.66 2.87 15 .78 1 2.73 3.06 2.73 5.93a7.49 7.49 0 0 1-1.24 3.82c-2 3.32-4.55 11.85-4.55 11.85 6.75-13.38 21.4-8.71 26.1-6.78a33.44 33.44 0 0 0-3.9 0 34.35 34.35 0 0 0-4.74.6 3.39 3.39 0 1 0 .58 1.89 2.4 2.4 0 0 0 0-.28 34.76 34.76 0 0 1 8.58-.21c-10.37 12.79-26.28 7.52-26.28 7.52 1.95 6.31 13.87 6.31 13.87 6.31-4.47 8.94-14.91 8.14-14.91 8.14 2.64 3.66 8.72.57 8.72.57a31 31 0 0 0-7.34 24.08c.71 7 3.23 12.06 5.55 16.61a67 67 0 0 0 5.46 8.95c3.78 16.63-6.08 19.61-6.08 19.61-7.34 6.76-7.87 14.56-7.87 14.56 4.62-8.83 8.9-11.7 8.9-11.7 12.73-6.53 7.57-23.73 7.57-23.73 11.58 15.59-.92 35.08-.92 35.08-16 19.72-13.26 31.65-13.26 31.65 4.59-18.81 15.13-29.2 15.13-29.2C179.29 166 166.22 151 166.22 151c1.14 1.07 8.86 4 8.86 4 13.23 4.35 15.37 13.14 15.37 13.14 2.29-8.86-9.64-18.11-9.64-18.11 6.73.3 11.62-6.73 11.62-6.73a64 64 0 0 1 23.7-12.91c-6-2.3-22 2.75-22 2.75.54-8.87-4.05-18.58-4.05-18.58-6.95-21 6.12-34.47 6.12-34.47-15.32 9.14-16.93 26.46-17.05 31.71l-3.3-3.26a1.7 1.7 0 1 0-1.54 1 1.4 1.4 0 0 0 .41-.06l4 3.81c-2.81-.29-17-1-18.7 13.28-1.91 15.9 13.6 15.29 13.6 15.29 4.82-1 7.32-3 8.47-5.25a9.23 9.23 0 0 0 .57-6 21 21 0 0 0-2.39-5.75c-13.37-5.58-9.93 7.72-9.93 7.72l2.83-3.48c.16 0 2.17-.12 3.05 1.19 1 1.48-.14 3.74-1.53 4.73a5 5 0 0 1-5.88-.53c-2.55-3.16-2.82-5.38-2.49-6.9.57-2.59 3.41-5.56 3.41-5.56 15.74-8.56 17.88 9.48 17.88 9.48-2 20.33-22.78 11.16-22.78 11.16-14.82-9.17-5.8-27.21-5.8-27.21 2.9-12.69 35.92-37.76 35.92-37.76 14.15-7.72 18.36-20.52 19.46-29.5-.06 1.57-.18 3-.33 4.18a53 53 0 0 1-2.52 10.72 88.39 88.39 0 0 1-4.13 9.63 170.06 170.06 0 0 0-6.56 15.84c-3.2 9.35-3.25 13.68-3.24 14.88a33 33 0 0 0 .65 6.35c-.79 1.07-1.09 4.34-.78 7 .47 4 2.54 8.29 3.78 8.08s1.61-4.44 1.15-7.74c-.43-3-1.77-6.3-2.9-7.34a36.53 36.53 0 0 1-.45-8.39 42.94 42.94 0 0 1 2.39-11.06c2.21-6.85 3.86-9.4 7.28-17.37 3.13-7.27 4.69-10.9 5.68-14.79a51.3 51.3 0 0 0 1-5.09 52.38 52.38 0 0 1 .51 6.16 45.4 45.4 0 0 1-2 14c-.9 3.57-3.8 15.28-3.83 18.82v.4a32.17 32.17 0 0 0 .66 6.34 14.5 14.5 0 0 0-.79 7c.48 3.37 2.32 7.12 3.51 6.94s1.67-3.86 1.42-6.6a14.38 14.38 0 0 0-2.9-7.33 36.67 36.67 0 0 1-.45-8.4c.29-4.55 1.34-7.41 2.39-11.06a112.69 112.69 0 0 0 3.44-17.63c.14-1 .13-6.22.11-16.65 1 4.29 1.38 9 1.84 15.62s.12 10 1.22 18.6c.25 2 .5 3.56.67 4.62a13.11 13.11 0 0 0 .32 6.22c1.05 3.43 3.7 6.74 4.78 6.33s.78-4.78-.52-8.09a15.57 15.57 0 0 0-3.15-4.92c-.38-2.14-.93-5.51-1.31-9.69-.84-9-.1-10.6-.69-19A71.6 71.6 0 0 0 219 43.16c.74 2.1 1.66 4.77 2.66 8.07.41 1.37 1 3.37 1.63 5.83.75 2.87 1.19 5 1.29 5.46a56.48 56.48 0 0 1 1.21 6.88c.26 3 .38 4.5.4 5.33a10.51 10.51 0 0 0 .28 2.46 12.81 12.81 0 0 0 .75 2.13c.88 1.86 3.55 5.78 4.88 5.29s1.55-5-.53-8.09a8.47 8.47 0 0 0-3.33-2.85c-.25-1.56-.59-3.58-1-5.93-.27-1.48-.6-3.32-1.09-5.68-.63-3.05-1.38-6.66-2.69-11.29-.71-2.5-.63-1.91-1-3.27-.72-2.79-1-4.81-1.33-6.35a148.13 148.13 0 0 0 18.4 5.78c21.55 7.49 18.19 18.65 18.19 18.65 9.17-4.59.76-28 .76-28l4.89-7.68 4-7.91C280 .76 299.44 2.21 299.44 2.21c-28.78-6.3-43.34 2.87-43.34 2.87-3.21-4.93-20.52-3.89-20.52-3.89-9.4 6.21-41.73 6.64-41.73 6.64 4.52 5.34 23.57 3.78 27.57 3.73a24.87 24.87 0 0 0-2.2 1.51c-.39.3-.75.6-1.1.89a2 2 0 0 0-1-.28 2 2 0 1 0 1.71 1 29.01 29.01 0 0 1 3.38-2.43 13.87 13.87 0 0 0-.13 3.22c.08.93.3 2.45.3 2.45 6.88 25.8 26 14.33 28.09 10.43s1-18.12-9.17-15.59-1.49 9.17-1.49 9.17c-2.29-2.52 2.29-3.32 2.29-3.32 7.8 6.19-1.14 8.94-1.14 8.94-11 .57-12.16-8.9-12.16-8.9-1.68-6.42 5.36-10.7 13.61-11.16S267 17.73 252.66 33.17s-38.83-5.05-38.83-5.05v-.05l-.19-.24c-.21-.24-29-19.43-29-19.43 5.24-7.83 34.54-4.89 34.54-4.89C159-6.42 148.71 18.8 148.71 18.8l4.21 4.51L165.27 16a31 31 0 0 1 7.37-1.29Z"
                                            class="cls-stop" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </section>

                <section data-aos="fade-up" data-aos-duration="3000" id="section-bride ">
                    <div class="w-full overflow-hidden">
                        <div class="flex flex-wrap justify-center p-10">
                            <div class="w-3/4">
                                <div class="swiper bride-swiper rounded-[30px] shadow-xl  shadow-slate-700">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide filter grayscale contrast-100 brightness-98"><img src="{{ asset('img/jemari/kotak/7.jpg') }}"
                                                alt=""></div>
                                        <div class="swiper-slide"><img src="{{ asset('img/jemari/kotak/7.jpg') }}" alt=""></div>

                                    </div>
                                </div>
                                <div class="text-center">
                                    <p class="mt-5 font-bold font-playfair font-italic"><i>Jemari</i></p>
                                    <p class="font-light font-poppins text-xs">Putri dari Bapak Muhammad Amin Dan Ibu Tijah</p>
                                    <div class="mt-8" data-aos="fade-up" data-aos-duration="3000">
                                        <a href="https://www.instagram.com/itsme_jze25/" class="px-3 py-3 rounded-md bg-primarymini1-0 text-white hover:text-black">
                                            <i class="fab fa-instagram mr-2 text-sm"></i><span>Instagram</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="w-1/4">
                                <p class="font-poppins font-semibold text-center text-primarymini1-0   translate-y-[7rem] rotate-90">The Brides</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section data-aos="fade-up" data-aos-duration="3000" id="section-groom ">
                    <div class="w-full overflow-hidden">
                        <div class="flex flex-wrap justify-center p-10">
                            <div class="w-1/4">
                                <p class="font-poppins text-sm  font-semibold text-center text-primarymini1-0 translate-y-[7rem] rotate-90">The Groom</p>
                            </div>
                            <div class="w-3/4">
                                <div class="swiper groom-swiper rounded-[30px] shadow-xl  shadow-slate-700">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide filter grayscale contrast-100 brightness-98"><img src="{{ asset('img/jemari/kotak/8.jpg') }}"
                                                alt=""></div>
                                        <div class="swiper-slide"><img src="{{ asset('img/jemari/kotak/8.jpg') }}" alt=""></div>

                                    </div>
                                </div>
                                <div class="text-center">
                                    <p class="mt-5 font-bold font-playfair font-italic"><i>Zakaria</i></p>
                                    <p class="font-light font-poppins text-xs">Putri dari Alm Bapak Muhammad Mahmud Dan Ibu Manis</p>
                                    <div class="mt-8" data-aos="fade-up" data-aos-duration="2000">
                                        <a href="https://www.instagram.com/iyeezack.01/" class="px-3 py-3 rounded-md bg-primarymini1-0 text-white hover:text-black">
                                            <i class="fab fa-instagram mr-2 text-sm"></i><span>Instagram</span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section data-aos="fade-up" data-aos-duration="2000" class="bg-primarymini1-0 p-5" id="section-surah">
                    <h1 class="font-playfair font-semibold text-4xl text-center text-white mb-5">Z <span class="font-light">|</span> J</h1>
                    <h1 class="font-poppins font-semibold text-center text-base mb-3 text-white">Q.S Ar-Rum : 21</h1>
                    <h1 class="font-poppins font-thin font-italic text-center text-xs text-white">Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan
                        pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan
                        sayang.</h1>
                </section>


                <section id="section-event">
                    <div data-aos="fade-up" data-aos-duration="3000" class="relative">
                        <div class="swiper event-swiper relative">
                            <div class="px-5 absolute z-50 top-20">
                                <div class="flex flex-wrap">
                                    <div class="w-1/2">
                                        <img style="border-radius:80px 0 0 0;" src="{{ asset('img/jemari/kotak/3.jpg') }}" alt="">
                                    </div>
                                    <div class="w-1/2">
                                        <img style="border-radius:0 0 80px 0;" src="{{ asset('img/jemari/kotak/5.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-full flex flex-wrap">
                                    <div class="bg-secondarymini1-0 w-1/4 ">
                                        <h1 class="mt-20 font-playfair translate-y-[3rem] rotate-90 text-3xl font-semibold text-white ">Akad</h1>
                                    </div>
                                    <div class=" w-3/4 p-3">
                                        <div class="  text-primarymini1-0 border-solid border-b-[1.5px] border-primaryluxx-0 flex flex-wrap">
                                            <h1 class="text-primarymini1-0 font-bold font-poppins text-right text-6xl w-1/3 mt-2">9</h1>
                                            <h1 class="w-2/3 p-4 font-semibold font-poppins text-lg">Januari 2024</h1>

                                        </div>
                                        <div class="flex flex-wrap mt-3 font-poppins text-base font-semibold text-primarymini1-0">
                                            <div class="w-1/2">
                                                <h1 class="text-xs">Kamis</h1>
                                            </div>
                                            <div class="w-1/2">
                                                <h1 class="text-xs"><i class="fas fa-clock mr-2"></i>09:00 WIB</h1>
                                            </div>
                                        </div>
                                        <div class=" pb-5 font-poppins text-primarymini1-0">
                                            <h1 class="py-5 font-poppins font-semibold text-sm">Lokasi Acara</h1>
                                            <h1 class="text-xs font-semibold">Kediaman Mempelai Pria</h1>
                                            <h1 class="text-xs mb-[30px]">Kepies, Permata, Bener Meriah</h1>
                                            <a href="https://maps.app.goo.gl/UthVaZhMMxkGzGb96"
                                                class="rounded-md bg-primarymini1-0 p-3 font-medium text-base text-white hover:text-black" target="_blank">Google Maps</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide grayscale opacity-5"><img src="{{ asset('img/jemari/1.jpg') }}" alt=""></div>
                                <div class="swiper-slide grayscale opacity-5"><img src="{{ asset('img/jemari/3.jpg') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                    <div data-aos="fade-up" data-aos-duration="3000" class="relative">
                        <div class="swiper event-swiper2  relative">
                            <div class="px-5 top-10 z-50 absolute">
                                <div class="flex flex-wrap">

                                    <div class="w-1/2">
                                        <img style="border-radius:10px 0 0 80px;" src="{{ asset('img/jemari/kotak/1.jpg') }}" alt="">
                                    </div>
                                    <div class="w-1/2">
                                        <img style="border-radius:0 80px 0 0;" src="{{ asset('img/jemari/kotak/6.jpg') }}" alt="">
                                    </div>
                                </div>
                                <div class="w-full flex flex-wrap">

                                    <div class=" w-3/4 p-3 bg-opacity-50">
                                        <div class="  text-primarymini1-0 border-solid border-b-[1.5px] border-primaryluxx-0 flex flex-wrap">
                                            <h1 class="text-primarymini1-0 font-bold font-poppins text-right text-6xl w-1/3 mt-2">10</h1>
                                            <h1 class="w-2/3 p-4 font-semibold font-poppins text-lg">Januari 2024</h1>

                                        </div>
                                        <div class="flex flex-wrap mt-3 font-poppins text-base font-semibold text-primarymini1-0">
                                            <div class="w-1/2">
                                                <h1 class="text-xs">Kamis</h1>
                                            </div>
                                            <div class="w-1/2">
                                                <h1 class="text-xs"><i class="fas fa-clock mr-2"></i>09:00 WIB</h1>
                                            </div>
                                        </div>
                                        <div class=" pb-5 font-poppins text-primarymini1-0">
                                            <h1 class="py-5 font-poppins font-semibold text-sm">Lokasi Acara</h1>
                                            <h1 class="text-xs font-semibold">Kediaman Mempelai Pria</h1>
                                            <h1 class="text-xs mb-[30px]">Kepies, Permata, Bener Meriah</h1>
                                            <a href="https://maps.app.goo.gl/UthVaZhMMxkGzGb96"
                                                class="rounded-md bg-primarymini1-0 p-3 font-medium text-base text-white hover:text-black" target="_blank">Google Maps</a>
                                        </div>
                                    </div>
                                    <div class="bg-secondarymini1-0 w-1/4 ">
                                        <h1 class="mt-20 font-playfair translate-y-[3rem] rotate-90 text-3xl font-semibold text-white ">Resepsi</h1>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide grayscale opacity-5"><img src="{{ asset('img/jemari/3.jpg') }}" alt=""></div>
                                <div class="swiper-slide grayscale opacity-5"><img src="{{ asset('img/jemari/1.jpg') }}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </section>

                <section data-aos="fade-up" data-aos-duration="3000" id="our-story">
                    <div class="w-full mb-10">
                        <h1 data-aos="fade-down" data-aos-duration="2000" class="text-center font-playfair text-xl text-black text-bold ">OUR <span
                                class="text-end mr-5 font-saint text-xl text-primaryluxx-0leading-7 mb-5">Story</span></h1>
                    </div>

                    <div id="carousel-small" class="px-5">
                        <div style="height: 200px; width:100%;border-radius:50px 20px 50px 0;" class="swiper story-swiper">
                            <div class="w-full  h-full bottom-0 absolute bg-gradient-to-t from-[#b7b1a4] via-[#b7b1a4de] to-[#ffffff00]">
                            </div>
                            <div class="swiper-wrapper">
                                <div class="swiper-slide"><img style="height: 200px;width:100%;object-fit:cover;" src="{{ asset('img/jemari/5.jpg') }}" alt="">
                                </div>
                                <div class="swiper-slide"><img style="height: 200px;width:100%;object-fit:cover;" src="{{ asset('img/jemari/6.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full flex flex-wrap px-5">
                        <div class="bg-secondarymini1-0 w-1/4 ">
                            <h1 class="mt-20 font-playfair rotate-90 text-xl font-semibold text-white ">Love Story</h1>
                        </div>
                        <div class=" w-3/4 p-3 bg-opacity-50">
                            <div class=" pb-5 font-poppins text-primarymini1-0">
                                <h1 class=" font-poppins font-semibold text-sm">Bertunangan</h1>
                                <h1 class="text-xs mb-3">14 Desember 2024</h1>
                                <h1 class="text-xs">Setelah menjalin hubungan beberapa tahun, akhirnya kami memantabkan hati untuk membawa hubungan ini ke jenjang yang lebih
                                    serius untuk hidup dan menua bersama.</h1>

                            </div>
                        </div>

                    </div>


                </section>

                <section id="section galery">
                    <div class=" bg-primarymini-1">
                        <div class="w-full mb-10 mt-10">
                            <h1 data-aos="fade-down" data-aos-duration="2000" class="text-center font-playfair text-xl text-black text-bold ">OUR <span
                                    class="text-end mr-5 font-saint text-xl text-primaryluxx-0leading-7 mb-5">Galery</span></h1>
                        </div>
                        <div data-aos="fade-up" data-aos-duration="2000" class="gallery mt-5 w-full">
                            <div class="image-slide  grid grid-cols-1 ">
                                <div><img src="{{ asset('img/jemari/1.jpg') }}" class="object-cover w-full "></div>
                                <div><img src="{{ asset('img/jemari/2.jpg') }}" class="object-cover w-full "></div>
                                <div><img src="{{ asset('img/jemari/3.jpg') }}" class="object-cover w-full "></div>
                                <div><img src="{{ asset('img/jemari/4.jpg') }}" class="object-cover w-full "></div>
                                <div><img src="{{ asset('img/jemari/5.jpg') }}" class="object-cover w-full "></div>
                                <div><img src="{{ asset('img/jemari/6.jpg') }}" class="object-cover w-full "></div>
                                <div><img src="{{ asset('img/jemari/7.jpg') }}" class="object-cover w-full "></div>
                                <div><img src="{{ asset('img/jemari/8.jpg') }}" class="object-cover w-full "></div>
                            </div>
                            <div class="thumb h-16 grid grid-cols-3 ">
                                <div><img src="{{ asset('img/jemari/1.jpg') }}" class="object-cover  w-48 h-16"></div>
                                <div><img src="{{ asset('img/jemari/2.jpg') }}" class="object-cover  w-48 h-16"></div>
                                <div><img src="{{ asset('img/jemari/3.jpg') }}" class="object-cover  w-48 h-16"></div>
                                <div><img src="{{ asset('img/jemari/4.jpg') }}" class="object-cover  w-48 h-16"></div>
                                <div><img src="{{ asset('img/jemari/5.jpg') }}" class="object-cover  w-48 h-16"></div>
                                <div><img src="{{ asset('img/jemari/6.jpg') }}" class="object-cover  w-48 h-16"></div>
                                <div><img src="{{ asset('img/jemari/7.jpg') }}" class="object-cover  w-48 h-16"></div>
                                <div><img src="{{ asset('img/jemari/8.jpg') }}" class="object-cover  w-48 h-16"></div>

                            </div>
                        </div>
                    </div>
                </section>

                <section id="section-wedding-gif">
                    <div class="p-5 bg-primarymini1-0 text-textluxx-0">
                        <h1 data-aos="fade-up" data-aos-duration="2000" class="text-center py-5 font-yellowMagician text-xl text-white ">GIFT</h1>
                        <p data-aos="fade-up" data-aos-duration="2000" class="text-center font-poppins text-sm text-white font-medium">Bagi Bapak/Ibu/Saudara/i yang ingin
                            mengirimkan hadiah pernikahan dapat melalui virtual account di bawah ini:</p>

                        <div data-aos="fade-up" data-aos-duration="2000" class="card bg-secondarymini1-0 shadow-md mt-5 p-10 rounded-lg text-center text-primaryluxx-0">
                            <h1 class="font-yellowMagician text-xl text-white">BSI</h1>
                            <h2 id="textToCopy" class="font-lg text-white font-poppins">7212577329</h2>
                            <h2 class="font-base text-white font-poppins mb-4">A/N : ZAKARIA </h2>
                            <button id="copyButton" class="p-2 rounded-sm bg-primarymini1-0 text-white font-poppins font-normal hover:text-black">Salin No Rek</button>
                        </div>
                    </div>
                </section>

                <section id="section-thanks">
                    <div class="relative">
                        <div id="carousel-small" class="">
                            <div class="swiper thanks-swiper relative">
                                <div class="w-full  h-2/3 z-50 bottom-0 absolute bg-gradient-to-t from-[#b7b1a4] via-[#b7b1a4de] to-[#ffffff00]">
                                    <div class="p-5 bottom-0 absolute">
                                        <h1 data-aos="fade-up" data-aos-duration="2000" class="text-center py-5 font-playfair text-xl text-white ">Terimakasih</h1>
                                        <p data-aos="fade-up" data-aos-duration="2000" class="text-center font-thin font-poppins text-xs mb-10 text-white">Merupakan suatu
                                            kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan memberikan do’a restu kepada kami.</p>

                                    </div>
                                </div>
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide grayscale"><img src="{{ asset('img/jemari/1.jpg') }}" alt=""></div>
                                    <div class="swiper-slide grayscale"><img src="{{ asset('img/jemari/3.jpg') }}" alt=""></div>

                                </div>
                            </div>
                        </div>
                    </div>

                </section>

                <section id="section-comment">
                    <div class="p-5 bg-secondarymini1-0">
                        <h1 class="text-center py-5 font-playfair text-5xl text-white">Ucapan</h1>
                        <div class="p-3">
                            @livewire('comment-post', ['undanganId' => $undanganId, 'color' => $color])
                        </div>

                        <h1 class="text-base font-poppins font-bold text-white mb-5">Ucapan</h1>
                        <div class="h-screen pb-10 overflow-y-scroll bg-cover bg-center ">
                            @livewire('comment-index', ['undanganId' => $undanganId, 'color' => $color])
                        </div>
                    </div>
                </section>

                <section id="section-footer">
                    <div class="p-10 bg-primarymini1-0 text-white">
                        <div class="text-center">
                            <h1 class="text-xl font-poppins font-bold mb-7">tanpakata.com</h1>
                            <a href="#"><i class="fab fa-instagram mr-5 text-3xl"></i></a>
                            <a href="#"><i class="fab fa-whatsapp text-3xl"></i></a>

                            <p class="font-poppins font-light mt-8">copyright &copy; 2022</p>
                        </div>
                    </div>
                </section>

                <section id="section-music-button">
                    <button id="pause" class="hidden w-8 h-8 z-[999] fixed bottom-4 right-4 mb-5 rounded-full text-center  border-[1px] border-[#A0ADB3] items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 732 732">
                            <defs>
                                <style>
                                    .cls-pause-1 {
                                        fill: #8C806E;
                                    }

                                    .cls-pause-2 {
                                        fill: #B7B1A4;
                                    }
                                </style>
                            </defs>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <circle class="cls-pause-1" cx="366" cy="366" r="366" />
                                    <rect class="cls-pause-2" x="216" y="178" width="116" height="376" rx="49.53" />
                                    <rect class="cls-pause-2" x="408" y="178" width="116" height="376" rx="56.34" />
                                </g>
                            </g>
                        </svg>
                    </button>

                    <button id="play" class="hidden w-8 h-8 z-[999] fixed bottom-4 right-4 mb-5 rounded-full text-center  border-[1px] border-[#A0ADB3] items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 732 732">
                            <defs>
                                <style>
                                    .cls-play-1 {
                                        fill: #8C806E;
                                    }

                                    .cls-play-2 {
                                        fill: #B7B1A4;
                                    }
                                </style>
                            </defs>
                            <g id="Layer_2" data-name="Layer 2">
                                <g id="Layer_1-2" data-name="Layer 1">
                                    <circle class="cls-play-1" cx="366" cy="366" r="366" />
                                    <path class="cls-play-2"
                                        d="M270,210.19V524.44c.07,6.17,1.19,13,5.78,15.77,7.63,4.53,20.78-4.86,24.22-7.21,21.44-14.68,127.42-72.2,278.92-152.87L293.53,191.89A16.51,16.51,0,0,0,270,210.19Z" />
                                </g>
                            </g>
                        </svg>
                    </button>

                    <audio id="audioPlayer" src="{{ asset('musik/speechles.mp3') }}" hidden></audio>
                </section>
            </section>
            {{-- Content Right --}}
        </main>
    </body>
@endsection

@push('script')
    <script>
        var swiper = new Swiper(".head-swiper", {
            slidesPerView: 4,
            spaceBetween: 3,
            loop: true,
            autoplay: {
                delay: 3000, // Durasi slide auto (dalam milidetik)
                disableOnInteraction: false, // Tetapkan ke false agar slide tidak dihentikan ketika interaksi pengguna
            },
            speed: 1200,
        });

        var swiper = new Swiper(".bride-swiper", {
            slidesPerView: 1

                ,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            speed: 3000,
        });

        var swiper = new Swiper(".groom-swiper", {
            slidesPerView: 1,
            direction: 'horizontal'

                ,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                reverseDirection: true
            },
            speed: 3000
        });

        var swiper = new Swiper(".story-swiper", {
            slidesPerView: 1,
            direction: 'vertical',
            spaceBetween: 0,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                reverseDirection: true

            },
            speed: 3000,
        });

        var swiper = new Swiper(".event-swiper", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false


            },
            speed: 3000,
        });

        var swiper = new Swiper(".event-swiper2", {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
                reverseDirection: true

            },
            speed: 3000,
        });
    </script>
    <script>
        $(document).ready(function() {
            setInterval(function() {
                var currentImage = $('#image-container img:not(.fadeOut)');
                var nextImage = currentImage.next('img');

                if (nextImage.length === 0) {
                    nextImage = $('#image-container img:first');
                }

                currentImage.addClass('fadeOut');
                nextImage.removeClass('fadeOut');
            }, 4000); // Ganti angka 3000 dengan durasi transisi dalam milidetik
        });
    </script>

    <script>
        $(window).on('load', function() {
            var loader = $('#preLoader');
            console.log('success Load');
            loader.hide();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#buttonOpen').on('click', function() {
                $("#open").animate({
                    top: "-=200px",
                    opacity: 0,
                }, 1300, function() {
                    $(this).addClass("hidden");
                })

                $("body").removeClass("overflow-hidden");
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            // Menambahkan event click pada tombol
            $('#copyButton').on('click', function() {
                // Memilih teks yang akan di-copy
                var textToCopy = $('#textToCopy').text();

                // Membuat elemen temporary textarea untuk menyalin teks
                var $tempTextArea = $('<textarea>');

                // Memasukkan teks yang akan di-copy ke dalam textarea
                $tempTextArea.text(textToCopy);

                // Menambahkan textarea ke dalam dokumen (di luar area pandangan)
                $('body').append($tempTextArea);

                // Memilih teks dalam textarea
                $tempTextArea.select();

                // Menyalin teks ke clipboard menggunakan perintah execCommand
                document.execCommand('copy');

                // Menghapus textarea temporary
                $tempTextArea.remove();
                alert('No Rekening Berhasil Disalin!');
            });
        });
    </script>



    <script>
        $(document).ready(function() {

            const audioPlayer = document.getElementById("audioPlayer");
            const pauseButton = document.getElementById("pause");;
            const playButton = document.getElementById("play");
            const buttonOpen = document.getElementById("buttonOpen");

            $(pauseButton).on("click", function() {

                $(this).addClass('hidden');
                $("#play").removeClass("hidden");
                audioPlayer.pause();

            });

            $(playButton).on("click", function() {

                $(this).addClass('hidden');
                $("#pause").removeClass("hidden");
                audioPlayer.play();

            });

            $(buttonOpen).on("click", function() {

                $("#pause").removeClass("hidden");
                audioPlayer.play();

            });


        });
    </script>

    <script>
        $(document).ready(function() {

            // Tanggal akhir yang diinginkan (ganti dengan tanggal dan waktu yang diinginkan)
            const targetDate = new Date("2024-01-10T09:00:00").getTime();

            // Perbarui hitungan mundur setiap 1 detik
            const countdownInterval = setInterval(updateCountdown, 1000);

            function updateCountdown() {
                const now = new Date().getTime();
                const timeRemaining = targetDate - now;

                if (timeRemaining > 0) {
                    const days = addLeadingZero(Math.floor(timeRemaining / (1000 * 60 * 60 * 24)));
                    const hours = addLeadingZero(Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
                    const minutes = addLeadingZero(Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60)));
                    const seconds = addLeadingZero(Math.floor((timeRemaining % (1000 * 60)) / 1000));

                    $("#day").text(days);
                    $("#hour").text(hours);
                    $("#minute").text(minutes);
                    $("#second").text(seconds);
                } else {
                    // Tindakan yang akan diambil ketika hitung mundur selesai (misalnya, munculkan pesan)
                    clearInterval(countdownInterval);
                    $("#countdown").text("Hitung mundur selesai!");
                }
            }

            function addLeadingZero(value) {
                // Fungsi untuk menambahkan angka 0 di belakang jika waktu hanya terdiri dari 1 angka
                return value < 10 ? "0" + value : value;
            }
        });
    </script>

    <script type="text/javascript">
        $('.image-slide').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            fade: true,
            asNavFor: '.thumb'
        });
        $('.thumb').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: '.image-slide',
            dots: false,
            arrows: false,
            centerMode: true,
            focusOnSelect: true
        });
    </script>
@endpush
