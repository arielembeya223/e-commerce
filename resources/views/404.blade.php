@extends('model.base')
@section("content")

<style>
    .lottie-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 55vh;
    }

    .lottie-player {
        width: 500px; /* Ajustez la largeur à votre convenance */
        height: auto; /* Pour maintenir le rapport hauteur-largeur */
    }

    @media (max-width: 640px) {
        .lottie-container {
            height: 45vh; /* Ajustez la hauteur pour les écrans plus petits */
        }

        .lottie-player {
            width: 80%; /* Ajustez la largeur pour les écrans plus petits */
            max-width: 300px; /* Limitez la largeur maximale sur les écrans plus petits */
        }
    }
</style>

<div class="lottie-container">
    <lottie-player src="{{asset('Animation.json')}}" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
</div>

<div class="mt-8 text-center">
    <p class="text-lg font-bold text-gray-700">Oups, nous n'avons pas trouvé d'article qui correspond à votre requête.</p>
    <a href="{{ Route('welcome') }}" class="inline-block px-4 py-2 mt-4 bg-blue-500 text-white rounded-full">Retour à la page d'accueil</a>
</div>

@endsection
