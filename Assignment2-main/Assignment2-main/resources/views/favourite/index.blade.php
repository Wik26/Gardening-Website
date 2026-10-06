<x-layout title="About Page">
    <h1>Favourites</h1>
    <h2>Here is your list of favourites:</h2>
    <div class="plant__container">
        @foreach ($plants as $plant)
            <div class="detail__container">
                <img src="{{ asset('storage/' .$plant->filename) }}" alt="image" width="100%" height="85%"/> 
                <a href="/plants/{{$plant->id}}" class="plant__link">{{ $plant->product }}</a>
            </div>
        @endforeach
    </div>
</x-layout>