@extends('model.base')

@section('content')
<main class="bg-gray-100 min-h-screen flex justify-center items-center">

    <div class="bg-white p-8 rounded-md shadow-md w-full sm:w-max md:w-128 lg:w-144 mt-8 md:mt-0 mx-4 mb-8">

        <h2 class="text-2xl font-semibold mb-4">Création de Boutique</h2>

        <form action="" method="POST" class="w-full max-w-lg mx-auto md:flex md:flex-wrap">
            @csrf

            <!-- Nom de la boutique -->
            <div class="mb-4 w-full md:w-1/2">
                <label for="nom" class="block text-sm font-medium text-gray-600">Nom de la Boutique</label>
                <input type="text" id="nom" name="nom" class="mt-1 p-2 border rounded-md w-full" placeholder="Nom de la Boutique">
            </div>

            <!-- Email -->
            <div class="mb-4 w-full md:w-1/2 ">
                <label for="email" class="block text-sm font-medium text-gray-600 ml-3">Email</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 border rounded-md w-full ml-3" placeholder="Email de la Boutique">
            </div>

            <!-- Numéro de téléphone -->
            <div class="mb-4 w-full md:w-1/2">
                <label for="telephone" class="block text-sm font-medium text-gray-600">Numéro de Téléphone</label>
                <input type="tel" id="telephone" name="telephone" class="mt-1 p-2 border rounded-md w-full" placeholder="Numéro de Téléphone">
            </div>

            <!-- Adresse -->
            <div class="mb-4 w-full md:w-1/2 ">
                <label for="adresse" class="block text-sm font-medium text-gray-600 ml-3">Adresse</label>
                <input type="text" id="adresse" name="adresse" class="mt-1 p-2 border rounded-md w-full ml-3" placeholder="Adresse de la Boutique">
            </div>

            <!-- Description -->
            <div class="mb-4 w-full">
                <label for="description" class="block text-sm font-medium text-gray-600">Description</label>
                <textarea id="description" name="description" rows="4" class="mt-1 p-2 border rounded-md w-full" placeholder="Description de la Boutique"></textarea>
            </div>

            <!-- Bouton Soumettre -->
            <div class="mt-6">
                <button type="submit" class="py-2 px-4 bg-indigo-500 text-white rounded-md hover:bg-indigo-600 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-800">Créer la Boutique</button>
            </div>

        </form>

    </div>

</main>
@endsection
