@extends('model.base')
@section('content')

<style>
  main {
    width: 100%;
    max-width: 50%; /* Vous pouvez ajuster cette valeur en fonction de vos besoins */
    margin: auto;
  }

  section {
    width: 100%;
    height: 50vh; /* 60% de la hauteur de l'écran */
    display: flex;
    justify-content: center;
    align-items: center;
  }
  .product-card:hover {
    transform: scale(1.05);
  }
  @media (max-width: 640px) {
    section {
      width: 80%;
      height: 30vh;
    }
  }
</style>

<main class="flex justify-center items-center p-5 sm:mt-8">
  <section>
    <div id="titleContainer" class="flex items-end text-6xl">
      <span class="typed-text font-black">Market</span><span class="typed-text text-red-500">Cap</span>
    </div>
  </section>
</main>

<div class="flex flex-wrap justify-center">
    @foreach($products as $product)
      <div class="max-w-xs sm:max-w-md md:max-w-sm lg:max-w-sm xl:max-w-xs w-full sm:w-1/2 md:w-1/2 lg:w-1/4 xl:w-1/4 p-2">
       <a href="{{ route('public.product', ['product' => $product->id]) }}">
        <div class="max-w-xs sm:max-w-md md:max-w-lg lg:max-w-xl xl:max-w-2xl rounded overflow-hidden shadow-lg bg-white overflow-hidden relative product-card">
          <img class="w-full h-40 sm:h-48 md:h-64 lg:h-64 xl:h-64 object-cover" src="{{ $product->profil($product->picture->nom) }}" alt="Nom du produit">
  
          <div class="px-6 py-4 relative z-10">
            <div class="font-bold text-xl mb-2">{{ $product->nom }}</div>
            <p class="text-red-500 font-family-du-prix text-lg mb-2">{{ $product->prix }}$</p>
            
            <div class="flex items-center">
              @for ($j = 1; $j <= $product->eval; $j++)
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
    @endforeach
</div> 
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script>
  (function ($) {
      "use strict";

      // Navbar on scrolling
      $(window).scroll(function () {
          if ($(this).scrollTop() > 200) {
              $('.navbar').fadeIn('slow').css('display', 'flex');
          } else {
              $('.navbar').fadeOut('slow').css('display', 'none');
          }
      });

      // Typed Initiate
      if ($('#titleContainer .typed-text').length > 0) {
          var typed_strings = $('#titleContainer .typed-text').map(function() {
              return $(this).text();
          }).get();

          var typed = new Typed('#titleContainer', {
              strings: typed_strings,
              typeSpeed: 100,     // Vitesse de frappe de chaque lettre
              backSpeed: 100,      // Vitesse de suppression de chaque lettre
              startDelay: 3000,   // Délai initial avant le démarrage (3 secondes)
              smartBackspace: false,
              loop: true
          });
      }

      // Testimonials carousel
      $(".testimonial-carousel").owlCarousel({
          autoplay: true,
          smartSpeed: 1500,
          dots: true,
          loop: true,
          items: 1
      });
  })(jQuery);
</script>
@endsection
