@extends('model.dashbord')
 @section('content')
 @php
    use Carbon\Carbon;
    Carbon::setLocale('fr');
 @endphp
    <!-- Contenu du Tableau de Bord -->
    <div class="container mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
<!-- Section Commandes des Clients -->
<div class="bg-white p-6 rounded-md shadow-md m-2">
    <h2 class="text-xl font-bold mb-4">Commandes des Clients</h2>

    <!-- Liste des Commandes -->
    <ul class="space-y-4">
        @foreach($commandes as $commande)
        <li class="border-b pb-4">
            <div class="flex items-center justify-between mb-2">
                <span class="font-bold text-lg">{{$commande->demandeur}}</span>
                <span class="text-gray-500">{{$commande->created_at->diffForHumans()}}</span>
            </div>
            <p class="text-gray-700 mb-2">
                <span class="text-sm font-semibold text-gray-600">Produit :</span>
                <span class="ml-2 text-lg font-bold text-indigo-800">{{$commande->product->nom}}</span>
            </p>
            <p class="text-blue-500 hover:underline">
                <a href="tel:{{$commande->numero_demandeur}}" class="no-loader">Contacter l'acheteur</a>
            </p>
        </li>
        @endforeach
    </ul>
</div>

            <!-- Section Messages des Clients -->
            <div class="bg-white p-6 rounded-md shadow-md m-2">
                <h2 class="text-xl font-bold mb-4">Messages des Clients</h2>

                <!-- Liste des Messages -->
                
                <ul class="space-y-4">
                  @foreach($messages as $message)
                    <li>
                        <div class="flex items-center justify-between">
                            <span class="font-bold">{{$message->nom}}</span>
                            <span class="text-gray-500">{{$message->created_at->diffForHumans()}}</span>
                        </div>
                        <p>{{$message->message}}</p>
                    </li>
                  @endforeach
                </ul>
            </div>

            

        </div>
    </div>

@endsection
