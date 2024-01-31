@extends('model.base')
@section("content")
<style>
    .rounded-circle {
        border-radius: 50%;
        overflow: hidden;
    }
</style>
<main class="bg-gray-100 h-screen p-4">

    <div class="w-full md:w-4/5 lg:w-full mx-auto">
        <!-- Première Annonce ou message -->
        <div class="w-full md:w-4/5 lg:w-3/4 mx-auto bg-white rounded-lg shadow-lg overflow-hidden mb-4">
            <div class="flex p-4">
                <div class="rounded-circle overflow-hidden h-12 w-12 mr-4">
                    <img src="https://placekitten.com/100/100" alt="Photo de profil" class="w-full h-full object-cover">
                </div>
                <div>
                    <p class="font-semibold">Nom de l'utilisateur</p>
                    <p class="text-gray-600">Contenu de l'annonce ou du message...</p>
                </div>
            </div>
        </div>

        <!-- Deuxième Annonce ou message -->
        <div class="w-full md:w-4/5 lg:w-3/4 mx-auto bg-white rounded-lg shadow-lg overflow-hidden mb-4">
            <div class="flex p-4">
                <div class="rounded-circle overflow-hidden h-12 w-12 mr-4">
                    <img src="https://placekitten.com/100/100" alt="Photo de profil" class="w-full h-full object-cover">
                </div>
                <div>
                    <p class="font-semibold">Nom de l'utilisateur</p>
                    <p class="text-gray-600">Contenu de l'annonce ou du message...</p>
                </div>
            </div>
        </div>

        <!-- Ajoutez d'autres annonces ici... -->
    </div>

</main>
@endsection
