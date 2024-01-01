@extends('layouts.main')
@section('title', 'Luxury 1')
@push('css')

@endpush
@section('content')

<body class="">
 
    <div id="preLoader" class=" fixed top-0 left-0 w-screen h-screen  items-center justify-center bg-primarylux-0  z-50 ">
        <div class="mt-56 max-w-sm w-full mx-auto  flex justify-center items-center ">
            <div class="animate-pulse ">
               <div class="svg mb-5 flex justify-center items-center">
                    <svg width='50px' xmlns="http://www.w3.org/2000/svg" viewBox="0 0 693 513"><defs>
                        <style>.cls-surat-1{fill:none;stroke:#F4F5F0;stroke-miterlimit:10;stroke-width:40px;}.cls-surat-love{fill:#F4F5F0;stroke:none;stroke-miterlimit:10;stroke-width:40px;}</style>
                    </defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1">
                    <path class="cls-surat-1" d="M326,350,59,48l566,4Z"/><rect class="cls-surat-1" x="20" y="20" width="653" height="473" rx="36.53"/>
                    <path class="cls-surat-1" d="M616,480,74,477,327,257Z"/>
                    <path  class="cls-surat-love" d="M330.5,422,216.61,308.07c-98.93-98.92,15-212.82,113.89-113.9,105.78-105.78,219.68,8.12,113.89,113.9Z"/></g></g>
                    </svg>
               </div>
               <div class="loading flex justify-center items-center">
                <p class="text-xl text-[#F4F5F0] font-poppins font-medium">Loading 
                    <span class="animate-blink" style="animation-delay: 0.2s;">.</span>
                    <span  class="animate-blink" style="animation-delay: 0.4s;">.</span >
                    <span  class="animate-blink" style="animation-delay: 0.6s;">.</span>
                </p>
               </div>
                
            </div>
        </div>
    </div>

<main class="container-lg border-4 border-red-500">
    <section class="md:relative md:flex md:flex-wrap md:justify-end">
        <section class="w-2/3 h-screen fixed left-0 top-0 bottom-0 bg-blue-500 hidden md:block ">
            <h1 class="text-5xl ">Oke</h1>
            <h1 class="text-4xl md:text-6xl lg:text-7xl">Welcome to our website</h1>
        </section>
        <section class="w-full md:w-1/3  bg-green-400">
          <div class="p-5">
            <h1 class="text-9xl ">Oke</h1>
            <h1 class="text-9xl ">Oke</h1>
            <h1 class="text-9xl ">Oke</h1>
            <h1 class="text-9xl ">Oke</h1>
            <h1 class="text-9xl ">Oke</h1>
            <h1 class="text-9xl ">Oke</h1>
            <h1 class="text-9xl ">Oke</h1>
            <h1 class="text-9xl ">Oke</h1>
            <h1 class="text-9xl ">Oke</h1>
            <h1 class="text-xl ">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque veniam beatae aliquam ipsam, voluptatem iure ipsum ex dolorem, pariatur amet ullam optio, recusandae dolorum fugiat reiciendis mollitia? Ad, corrupti aperiam.</h1>
          </div>
        </section>

        <section>
            
        </section>
    </section>
</main>

</body>

@endsection

@push('script')


 <script>
    $(window).on('load', function() {
         var loader = $('#preLoader');
         console.log('success Load');
         loader.hide();
    });
  </script>

  

    
@endpush