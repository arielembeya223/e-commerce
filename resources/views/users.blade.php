@extends('model.base')
@section('content')
<main class="bg-gray-100 min-h-screen flex justify-center md:items-center">

    <div class="bg-white p-4 sm:p-8 rounded-md shadow-md w-full sm:w-96 mt-8 md:mt-0 mx-4 mb-8 flex flex-col items-center">

        <h2 class="text-2xl font-semibold mb-4">Inscription</h2>

        <form id="registrationForm" class="w-full max-w-md">

            <!-- Nom -->
            <div class="mb-4">
                <label for="nom" class="block text-sm font-medium text-gray-600">Nom</label>
                <input type="text" id="nom" name="nom" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- E-mail -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-600">E-mail</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Mot de passe -->
            <div class="mb-4 relative">
                <label for="password" class="block text-sm font-medium text-gray-600">Mot de passe</label>
                <input type="password" id="password" name="password" class="mt-1 p-2 w-full border rounded-md">
            </div>

            <!-- Checkbox -->
            <div class="mb-4 flex items-center">
                <input type="checkbox" id="showPassword" class="form-checkbox h-4 w-4 text-indigo-600 mr-2">
                <label for="showPassword" class="text-sm text-gray-700 cursor-pointer">Afficher le mot de passe</label>
            </div>

            <!-- Bouton Soumettre -->
            <div class="mt-6">
                <button type="submit" class="py-2 px-4 bg-indigo-500 text-white rounded-md hover:bg-indigo-600 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-800">S'inscrire</button>
            </div>

        </form>

        <div class="mt-4 text-sm text-center">
            <p>Si vous avez déjà un compte, <a href="{{Route('public.connection')}}" class="text-indigo-500">connectez-vous ici</a>.</p>
        </div>

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
