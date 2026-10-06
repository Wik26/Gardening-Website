<x-layout title="Home">
  @auth
      <div>
        <p class="p__layout">Welcome {{Auth::user()->name}}!</p>
      </div>
    @endauth
<div class="search__container">
<h1>Plants</h1>

  <!-- Search Facility -->
<form class="search__form" action="{{ route('plants.search') }}" method="GET">
  <input type="text" name="search" placeholder="Search Plants" class="search__input">
  <button type="submit" class="search__button">Search</button> 
</form>
</div>
<!-- Display Search Results -->
<div class="plant__container">
    @if ($plants->isNotEmpty())
        @foreach ($plants as $plant)
        <div class="detail__container">
          <img src="{{ asset('storage/' .$plant->filename) }}" alt="image" width="100%" height="85%"/> 
          <a href="/plants/{{$plant->id}}" class="plant__link">{{ $plant->product }} ({{$plant->category->title}})</a>
        </div>
        @endforeach
    @elseif ($plants->isEmpty())
      <p>No results found.</p>
    @endif
</div>
{{ $plants->links() }}


</x-layout>