@extends('model.dashbord')
@section('content')
    <style>
        .star-btn {
            transition: color 0.3s ease-in-out;
        }

        .star-btn.selected {
            color: #fbbf24;
        }
    </style>

    <div class="container mx-auto mt-8 p-4 max-w-md bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-semibold mb-4">Publier un Produit</h2>

        <!-- Formulaire de publication -->
        <form action="{{Route('private.newProducts', ['store' => Auth::user()->id])}}" method="POST" class="w-full max-w-lg mx-auto" enctype="multipart/form-data">
            @csrf

            <!-- Nom du produit -->
            <div class="mb-4">
                <label for="nom_produit" class="block text-sm font-medium text-gray-600">Nom du Produit</label>
                <input type="text" id="nom_produit" name="nom"
                    class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:border-blue-500">
            </div>
            @error('nom')
            <div class="text-red-500">{{ $message }}</div>
           @enderror
            <!-- Description du produit -->
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-gray-600">Description du Produit</label>
                <textarea id="description" name="description" rows="4"
                    class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:border-blue-500"></textarea>
            </div>
            @error('description')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
            <!-- Évaluation du produit (étoiles) -->
            <div class="mb-4">
                <label class="block text-sm font-medium text-gray-600 mb-2">Évaluation du Produit</label>
                <div class="flex">
                    <!-- Utilisation de boutons pour les étoiles avec animation -->
                    @for ($i = 1; $i <= 5; $i++)
                        <button type="button"
                            class="star-btn text-2xl text-gray-400 focus:outline-none focus:text-yellow-500"
                            onclick="selectStar({{ $i }})">&#9733;</button>
                    @endfor
                </div>
                <!-- Ajout d'un champ caché pour stocker la valeur de l'évaluation sélectionnée -->
                <input type="hidden" id="evaluation" name="eval" value="0">
            </div>
            @error('eval')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
         <!-- Photo du produit -->
         <div class="mb-4">
            <label for="logo" class="block text-sm font-medium text-gray-600 mb-2">logo</label>
            <label class="cursor-pointer bg-blue-500 mt-4 text-white py-2 px-4 rounded-full text-sm hover:bg-blue-600 focus:outline-none">
                Choisissez un fichier
                <input type="file"   name="image" class="hidden"  required>
            </label>
        </div>
        @error('image')
        <div class="text-red-500">{{ $message }}</div>
        @enderror
            <!-- Prix du produit -->
            <div class="mb-4">
                <label for="prix" class="block text-sm font-medium text-gray-600">Prix du Produit</label>
                <input type="text" id="prix" name="prix"
                    class="mt-1 p-2 border rounded-md w-full focus:outline-none focus:border-blue-500">
            </div>
            @error('prix')
            <div class="text-red-500">{{ $message }}</div>
            @enderror
            <!-- Bouton Soumettre -->
            <div class="mt-6">
                <button type="submit"
                    class="py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none">Publier</button>
            </div>
        </form>
    </div>

    <!-- Script JavaScript pour la gestion de l'évaluation (étoiles) -->
    <script>
        function selectStar(starValue) {
            // Réinitialiser toutes les étoiles à la couleur d'origine
            document.querySelectorAll('.star-btn').forEach(starBtn => {
                starBtn.classList.remove('selected');
            });

            // Mettre en surbrillance les étoiles sélectionnées
            for (let i = 1; i <= starValue; i++) {
                document.querySelector(`.star-btn:nth-child(${i})`).classList.add('selected');
            }

            // Mettre à jour la valeur du champ caché "evaluation"
            document.getElementById('evaluation').value = starValue;
        }
    </script>
@endsection