@extends('model.base')
@section('content')

<main class="w-full md:w-3/5 lg:w-2/3 mx-auto flex justify-center items-center p-5 sm:mt-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.9/dist/css/themes/splide-default.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.0.9/dist/js/splide.min.js"></script>

    <div id="mainSplide" class="splide">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide"><img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg" alt="Slide 1"></li>
                <li class="splide__slide"><img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg" alt="Slide 2"></li>
                <li class="splide__slide"><img src="https://tecdn.b-cdn.net/img/Photos/Slides/img%20(15).jpg" alt="Slide 3"></li>
                <!-- Add more slides as needed -->
            </ul>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Splide('#mainSplide', {
                type: 'fade',
                heightRatio: 0.5,
                autoplay: true,
                interval: 3000,
                loop: true
            }).mount();
        });

        document.addEventListener('DOMContentLoaded', function () {
            const imageCarousel = document.getElementById('imageCarousel');
            let touchStartX = 0;

            imageCarousel.addEventListener('touchstart', function (e) {
                touchStartX = e.touches[0].clientX;
            });

            imageCarousel.addEventListener('touchmove', function (e) {
                const touchEndX = e.touches[0].clientX;
                const touchDeltaX = touchEndX - touchStartX;

                imageCarousel.scrollLeft -= touchDeltaX;
                touchStartX = touchEndX;
            });
        });
    </script>
</main>
<div class="flex flex-wrap justify-center">
    @for ($i = 1; $i <= 8; $i++)
      <div class="max-w-xs sm:max-w-md md:max-w-sm lg:max-w-sm xl:max-w-xs w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4 p-2">
       <a href="{{Route('public.product')}}">
        <div class="max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl rounded overflow-hidden shadow-lg bg-white overflow-hidden relative">
          <img class="w-full h-40 sm:h-48 md:h-64 lg:h-64 xl:h-64 object-cover" src="https://thumbs.dreamstime.com/z/sport-de-chaussures-41616578.jpg" alt="Nom du produit">
  
          <div class="px-6 py-4 relative z-10">

            <div class="font-bold text-xl mb-2">Nom du Produit</div>
  
            <p class="text-red-500 font-family-du-prix text-lg mb-2">€100,00</p>
  
            
            <div class="flex items-center">
              
              @for ($j = 1; $j <= 3; $j++)
                <svg class="text-yellow-500 w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                  <path d="M10 1l2.4 6.6h6.1l-4.9 4.1 1.9 6.6-5.5-4.2-5.5 4.2 1.9-6.6-4.9-4.1h6.1z"/>
                </svg>
              @endfor
            </div>
          </div>
  
  
          <div class="absolute top-0 left-0 right-0 bottom-0 bg-gradient-to-b from-white to-transparent pointer-events-none"></div>
        </div>
       </a>
      </div>
    @endfor
  </div> 
@endsection
