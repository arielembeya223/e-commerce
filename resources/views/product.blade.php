@extends("model.base")
@section("title","product")
@section("content")
    <!-- HTML avec Tailwind CSS -->

    <div class="flex flex-col lg:flex-row items-center lg:justify-center p-8 space-y-4 lg:space-y-0 lg:space-x-8">

        <!-- Partie gauche avec l'image -->
        <div class="lg:w-2/5 flex-shrink-0">
            <img class="w-full lg:w-80 h-48 object-cover rounded" src="{{$product->profil($product->picture->nom)}}" alt="Nom du produit">
        </div>

        <!-- Partie droite avec les détails -->
        <div class="flex flex-col flex-grow">

            <!-- Nom du produit -->
            <h2 class="text-2xl font-bold mb-2">{{$product->nom}}</h2>

            <!-- Prix -->
            <p class="text-green-500 text-lg mb-2">{{$product->prix}}$</p>

            <!-- Description -->
            <p class="text-gray-700 mb-2">{{$product->description}}</p>

            <!-- Étoiles -->
            <div class="flex items-center mb-2">
                @for ($i = 1; $i <= $product->eval; $i++)
                    <svg class="text-yellow-500 w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M10 1l2.4 6.6h6.1l-4.9 4.1 1.9 6.6-5.5-4.2-5.5 4.2 1.9-6.6-4.9-4.1h6.1z"/>
                    </svg>
                @endfor
            </div>

            <!-- Bouton "Acheter" -->
            <button class="flex items-center bg-blue-500 text-white px-4 py-2 rounded-md focus:outline-none mb-2 justify-center" onclick="afficherBoiteModale()">
                commander
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                </svg>
            </button>

            <!-- Bouton "Message" -->
            <button class="flex items-center bg-gray-300 text-gray-700 px-4 py-2 rounded-md focus:outline-none mb-2 justify-center" onclick="afficherBoiteModaleMessage()">
                Message
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.625 9.75a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H8.25m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0H12m4.125 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm0 0h-.375m-13.5 3.01c0 1.6 1.123 2.994 2.707 3.227 1.087.16 2.185.283 3.293.369V21l4.184-4.183a1.14 1.14 0 0 1 .778-.332 48.294 48.294 0 0 0 5.83-.498c1.585-.233 2.708-1.626 2.708-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
                </svg>              
            </button>

            <!-- Bouton "Appel" -->
            <a class="flex items-center bg-gray-300 text-gray-700 px-4 py-2 rounded-md focus:outline-none justify-center no-loader" href="tel:{{$product->store->numero}}">
                contacter directement le vendeur
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 3.75 18 6m0 0 2.25 2.25M18 6l2.25-2.25M18 6l-2.25 2.25m1.5 13.5c-8.284 0-15-6.716-15-15V4.5A2.25 2.25 0 0 1 4.5 2.25h1.372c.516 0 .966.351 1.091.852l1.106 4.423c.11.44-.054.902-.417 1.173l-1.293 .97a1.062 1.062 0 0 0-.38 1.21 12.035 12.035 0 0 0 7.143 7.143c.441.162.928-.004 1.21-.38l.97-1.293a1.125 1.125 0 0 1 1.173-.417l4.423 1.106c.5.125.852.575.852 1.091V19.5a2.25 2.25 0 0 1-2.25 2.25h-2.25Z" />
                </svg>              
            </a>

        </div>
    </div>

    <div id="boiteModale" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center m-2">
        <div class="bg-white p-8 max-w-md mx-auto rounded">
            <h2 class="text-2xl font-semibold mb-4">Commander le produit</h2>
            <form>
                <div class="mb-4">
                    <label for="nom" class="block text-sm font-medium text-gray-600">Nom</label>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom" class="mt-1 p-2 border rounded-md w-full">
                </div>
                <div class="mb-4">
                    <label for="numero" class="block text-sm font-medium text-gray-600">Numéro de téléphone</label>
                    <input type="tel" id="numero" name="numero" placeholder="Votre numéro de téléphone" class="mt-1 p-2 border rounded-md w-full">
                </div>
                <div class="mb-4">
                    <label for="adresse" class="block text-sm font-medium text-gray-600">Adresse</label>
                    <input type="text" id="adresse" name="adresse" placeholder="Adresse" class="mt-1 p-2 border rounded-md w-full" autocomplete="street-address">
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md focus:outline-none">Commander</button>
                </div>
            </form>
            <div class="mt-4 flex justify-end">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md focus:outline-none" onclick="fermerBoiteModale()">Fermer</button>
            </div>
        </div>
    </div>

    <div id="boiteModaleMessage" class="hidden fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center m-2">
        <div class="bg-white p-8 max-w-md mx-auto rounded">
            <h2 class="text-2xl font-semibold mb-4">Envoyer un Message</h2>
            <form>
                <div class="mb-4">
                    <label for="nomMessage" class="block text-sm font-medium text-gray-600">Nom</label>
                    <input type="text" id="nomMessage" name="nomMessage" placeholder="Votre nom" class="mt-1 p-2 border rounded-md w-full">
                </div>
                <div class="mb-4">
                    <label for="message" class="block text-sm font-medium text-gray-600">Message</label>
                    <textarea id="message" name="message" placeholder="Votre message" class="mt-1 p-2 border rounded-md w-full"></textarea>
                </div>
                <div class="flex justify-end">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md focus:outline-none">Envoyer</button>
                </div>
            </form>
            <div class="mt-4 flex justify-end">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-md focus:outline-none" onclick="fermerBoiteModaleMessage()">Fermer</button>
            </div>
        </div>
    </div>

    <script>
        function afficherBoiteModale() {
            document.getElementById('boiteModale').classList.remove('hidden');
        }

        function fermerBoiteModale() {
            document.getElementById('boiteModale').classList.add('hidden');
        }

        function afficherBoiteModaleMessage() {
            document.getElementById('boiteModaleMessage').classList.remove('hidden');
        }

        function fermerBoiteModaleMessage() {
            document.getElementById('boiteModaleMessage').classList.add('hidden');
        }
    </script>
@endsection
