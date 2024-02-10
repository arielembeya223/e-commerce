@extends('model.dashbord')
@section('content')
    <!-- Profil de la boutique -->
    <div class="container mx-auto mt-8 p-4">
        <div class="flex items-center">
            <!-- Photo de profil -->
            <img src="https://placekitten.com/150/150" alt="Photo de profil"
                class="w-16 h-16 object-cover rounded-full mr-4">

            <!-- Informations de la boutique -->
            <div>
                <h1 class="text-2xl font-bold">Nom de la Boutique</h1>
                <p class="text-gray-600">Biographie de la boutique</p>
            </div>
        </div>

        <!-- Articles à vendre -->
        <div class="mt-8 grid gap-4 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @for ($i = 1; $i <= 8; $i++)
                <div class="relative overflow-hidden bg-white rounded-lg shadow-md hover:shadow-xl focus:outline-none">
                    <a href="{{ Route('public.product') }}">
                        <img src="https://thumbs.dreamstime.com/z/sport-de-chaussures-41616578.jpg"
                            alt="Nom du produit" class="w-full h-48 object-cover transition-transform transform hover:scale-105">
                        <div class="p-4">
                            <p class="text-xl font-semibold mb-2">Nom du Produit</p>
                            <p class="text-red-500 font-bold text-lg mb-2">€100,00</p>
                            <div class="flex items-center">
                                @for ($j = 1; $j <= 3; $j++)
                                    <svg class="text-yellow-500 w-4 h-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20">
                                        <path
                                            d="M10 1l2.4 6.6h6.1l-4.9 4.1 1.9 6.6-5.5-4.2-5.5 4.2 1.9-6.6-4.9-4.1h6.1z" />
                                    </svg>
                                @endfor
                            </div>
                        </div>
                    </a>
                    <!-- Options de l'article -->
                    <div class="absolute top-0 right-0 m-2">
                        <button
                            class="group-hover:block focus:outline-none"
                            onclick="toggleOptions({{ $i }})"
                        >
                            <!-- Trois points alignés horizontalement -->
                            <svg class="text-gray-500 w-5 h-5 group-hover:text-black transition-colors duration-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path d="M3 9a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm6 0a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm6 0a2 2 0 1 1 4 0 2 2 0 0 1-4 0z" />
                            </svg>
                        </button>
                        <!-- Liste déroulante des options -->
                        <div id="options{{ $i }}"
                            class="hidden absolute top-0 right-0 mt-8 bg-white border border-gray-200 rounded-md shadow-md">
                            <a href="#" class="block px-4 py-2 text-red-500 hover:bg-gray-100"
                                onclick="deleteArticle({{ $i }})"
                            >
                                Supprimer
                            </a>
                            <a href="#" class="block px-4 py-2 text-blue-500 hover:bg-gray-100">Modifier</a>
                        </div>
                        <!-- Bouton pour fermer la liste déroulante -->
                        <button
                            class="hidden group-hover:block focus:outline-none"
                            onclick="closeOptions({{ $i }})"
                        >
                            <!-- Icône de croix -->
                            <svg class="text-gray-500 w-4 h-4 group-hover:text-black transition-colors duration-300"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M6.72 6.72a1 1 0 0 1 1.42 0L10 8.59l1.86-1.87a1 1 0 0 1 1.41 1.41L11.41 10l1.87 1.86a1 1 0 0 1-1.41 1.41L10 11.41l-1.86 1.87a1 1 0 0 1-1.42-1.42L8.59 10 6.72 8.13a1 1 0 0 1 0-1.41z" />
                            </svg>
                        </button>
                    </div>
                </div>
            @endfor
        </div>
    </div>

    <script>
        function toggleOptions(index) {
            const options = document.getElementById(`options${index}`);
            options.classList.toggle('hidden');
        }

        function closeOptions(index) {
            const options = document.getElementById(`options${index}`);
            options.classList.add('hidden');
        }

        function deleteArticle(index) {
            alert(`Supprimer l'article ${index}`);
        }
    </script>
@endsection
