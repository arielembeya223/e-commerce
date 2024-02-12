@extends('model.dashbord')
 @section('content')
    <!-- Contenu du Tableau de Bord -->
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

            <!-- Section Messages des Clients -->
            <div class="bg-white p-6 rounded-md shadow-md m-2">
                <h2 class="text-xl font-bold mb-4">Messages des Clients</h2>

                <!-- Liste des Messages -->
                <ul class="space-y-4">
                    <li>
                        <div class="flex items-center justify-between">
                            <span class="font-bold">Client 1</span>
                            <span class="text-gray-500">Date du message</span>
                        </div>
                        <p>Contenu du message...</p>
                    </li>

                </ul>
            </div>

            <!-- Section Commandes des Clients -->
            <div class="bg-white p-6 rounded-md shadow-md m-2">
                <h2 class="text-xl font-bold mb-4">Commandes des Clients</h2>

                <!-- Liste des Commandes -->
                <ul class="space-y-4">
                    <li>
                        <div class="flex items-center justify-between">
                            <span class="font-bold">Client 1</span>
                            <span class="text-gray-500">Date de la commande</span>
                        </div>
                        <p>Détails de la commande...</p>
                    </li>
                    
                </ul>
            </div>

        </div>
    </div>

@endsection
