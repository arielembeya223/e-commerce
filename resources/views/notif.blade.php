@extends('model.base')
@section("content")
<style>
    .rounded-circle {
        border-radius: 50%;
        overflow: hidden;
    }
</style>
<main class="bg-gray-100 h-screen p-4">

    <div class="w-full md:w-4/5 lg:w-full mx-auto">
        <!-- Première Annonce ou message -->
        @foreach($notifs as $annonce)
        <div class="w-full md:w-4/5 lg:w-3/4 mx-auto bg-white rounded-lg shadow-lg overflow-hidden mb-4">
            <div class="flex p-4">
                <div class="rounded-circle overflow-hidden h-12 w-12 mr-4">
                    <img src="{{$annonce->store->profil($annonce->store->picture->nom)}}" alt="Photo de profil" class="w-full h-full object-cover">
                </div>
                <div>
                    <p class="font-semibold">{{$annonce->store->nom}}</p>
                    <p class="text-gray-600">{!! nl2br(e($annonce->content)) !!}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</main>
@endsection
