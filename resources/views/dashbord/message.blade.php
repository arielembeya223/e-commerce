@extends('model.dashbord')
@section('content')
    
    <div class="container mx-auto mt-8 p-4 flex flex-col sm:flex-row justify-center">
        <!-- Première partie -->
        <div class="w-full sm:w-1/4 p-4 bg-white rounded-lg shadow-md mb-4 sm:mb-0">
            <h2 class="text-xl font-bold mb-4">Dernières réponses</h2>
            <!-- Liste des contacts -->
            <ul>
                <li class="mb-2">
                    <a href="#" class="text-blue-500 hover:underline">Pas cool</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="text-blue-500 hover:underline">Bien</a>
                </li>
                <li class="mb-2">
                    <a href="#" class="text-blue-500 hover:underline">Très bien</a>
                </li>
            </ul>
        </div>

        <!-- Deuxième partie -->
        <div class="flex-1 p-4 bg-white rounded-lg shadow-md ml-4">
            <div class="mb-4 flex flex-col">
                <!-- Zone de saisie de message -->
                <div class="flex items-center">
                    <input type="text" placeholder="Écrivez votre message"
                        class="flex-1 sm:w-full md:max-w-20 border rounded-l-full py-2 px-4 focus:outline-none">
                    <button class="bg-blue-500 text-white rounded-r-full py-2 px-4 hover:bg-blue-600 focus:outline-none">
                        Envoyer
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection
