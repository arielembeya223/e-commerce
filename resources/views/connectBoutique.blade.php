@extends('model.base')
@section('content')

<main class="bg-gray-100 min-h-screen flex justify-center md:items-center mt-4 md:mt-0" style="margin-top:50px">
    <div class="bg-white p-8 rounded-md shadow-md w-full sm:w-max md:w-128 lg:w-144 mt-8 md:mt-0 mb-8 mx-4" style="margin-top: -30px;">
        <h2 class="text-2xl font-semibold mb-4">Connexion de Boutique</h2>

        <form action="{{Route('public.boutiqueConnect')}}" method="POST" class="w-full max-w-sm">
            @csrf

            <!-- Nom de la boutique -->
            <div class="mb-4">
                <label for="nom" class="block text-sm font-medium text-gray-600">Nom de la Boutique</label>
                <input type="text" id="nom" name="nom" class="mt-1 p-2 border rounded-md w-full" placeholder="Nom de la Boutique" required>
            </div>
            @error('nom')
            <div class="text-red-500">{{ $message }}</div>
         @enderror
            <!-- Mot de passe -->
            <div class="mb-6">
                <label for="password" class="block text-sm font-medium text-gray-600 mb-2">Mot de passe</label>
                <input type="password" id="password" name="password" class="mt-1 p-2 border rounded-md w-full mb-2" placeholder="Mot de passe" required>
                <div class="flex items-end">
                    <input type="checkbox" id="showPassword" class="form-checkbox h-4 w-4 text-indigo-600">
                    <label for="showPassword" class="text-sm text-gray-700 cursor-pointer ml-2">Afficher le mot de passe</label>
                </div>
            </div>
            @error('mot de passe')
            <div class="text-red-500">{{ $message }}</div>
         @enderror
            <!-- Bouton Se connecter -->
            <div class="flex justify-center">
                <button type="submit" class="py-2 px-4 bg-indigo-500 text-white rounded-md hover:bg-indigo-600 focus:outline-none focus:shadow-outline-indigo active:bg-indigo-800">Se connecter</button>
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
