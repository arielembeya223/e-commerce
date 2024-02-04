@extends('model.base')
@section('content')


<main class="bg-gray-100 min-h-screen flex justify-center items-center">
    <div class="bg-white p-8 rounded-md shadow-md w-full sm:w-max md:w-128 lg:w-144 mt-8 md:mt-0 mx-4 mb-8">
        <h2 class="text-2xl font-semibold mb-4">Création de Boutique</h2>

        <form action="" method="POST" class="w-full max-w-lg mx-auto md:flex md:flex-wrap">
            @csrf

            <div class="flex flex-col md:flex-row w-full mb-4">
                <!-- Nom de la boutique -->
                <div class="w-full md:w-1/2 pr-2 mb-4 md:mb-0">
                    <label for="nom" class="block text-sm font-medium text-gray-600">Nom de la Boutique</label>
                    <input type="text" id="nom" name="nom" class="mt-1 p-2 border rounded-md w-full">
                </div>

                <!-- Mot de passe -->
                <div class="w-full md:w-1/2 pl-2">
                    <label for="password" class="block text-sm font-medium text-gray-600 mb-2">Mot de passe</label>
                    <input type="password" id="password" name="password" class="mt-1 p-2 border rounded-md w-full mb-2">
                    <div class="flex items-end">
                        <input type="checkbox" id="showPassword" class="form-checkbox h-4 w-4 text-indigo-600">
                        <label for="showPassword" class="text-sm text-gray-700 cursor-pointer ml-2">Afficher le mot de passe</label>
                    </div>
                </div>
            </div>

            <!-- Email -->
            <div class="mb-4 w-full md:w-1/2">
                <label for="email" class="block text-sm font-medium text-gray-600 ml-3">Email</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 border rounded-md w-full ml-3" placeholder="Email de la Boutique">
            </div>

            <!-- Numéro de téléphone -->
            <div class="mb-4 w-full md:w-1/2">
                <label for="telephone" class="block text-sm font-medium text-gray-600 ml-4">Numéro de Téléphone</label>
                <input type="tel" id="telephone" name="telephone" class="mt-1 p-2 border rounded-md w-full ml-4" placeholder="Numéro de Téléphone">
            </div>

            <!-- Adresse -->
            <div class="mb-4 w-full md:w-1/2">
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

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const passwordInput = document.getElementById('password');
            const showPasswordCheckbox = document.getElementById('showPassword');

            showPasswordCheckbox.addEventListener('change', function () {
                const type = showPasswordCheckbox.checked ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
            });
        });
    </script>
</main>
@endsection
