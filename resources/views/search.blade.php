@extends('model.base')
@section("content")
<style>
.result {
    border: 1px solid #e5e7eb;
    padding: 1rem;
    margin-bottom: 0.5rem;
    border-radius: 0.375rem;
    background-color: #fff;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
}

.result h3 {
    font-size: 1.25rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
}

.result p {
    color: #4b5563;
}

.result a {
    color: #3b82f6;
    text-decoration: none;
    transition: color 0.15s ease-in-out;
}

.result a:hover {
    color: #2563eb;
}
</style>
    <div class="m-4">
        @if(session('results') && count(session('results')) > 0)
        @foreach(session('results') as $result)
            <div class="border p-4 mb-2 bg-white rounded-md shadow-md">
                <h3 class="text-lg font-semibold mb-2">{{$result->nom}}</h3>
                <p class="text-gray-600">{{$result->description}}</p>
                <a href="{{ route('public.product', ['product' => $result->id]) }}" class="text-blue-500 hover:underline">Voir le produit</a>
            </div>
        @endforeach
    @else
        <div class="border p-4 bg-white rounded-md shadow-md">
            <h1 class="text-xl font-semibold mb-4">Aucun résultat</h1>
            <p class="text-gray-600">Désolé, aucun résultat n'a été trouvé pour votre recherche.</p>
        </div>
    @endif
    </div>
@endsection