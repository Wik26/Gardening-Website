<x-layout title="View Plant">
  <h1>{{$plant->product}}</h1>
  <img src="{{ asset('storage/' .$plant->filename) }}" alt="image" width="300px" height="250px"/> 
  <div class="plant__detail">
    <div class="detail__row">
      <h2 class="show__header">Price:</h2>
      <p class="detail__text"> {{$plant->price}}</p>
    </div>
    <div class="detail__row">
    <h2 class="show__header">Category:</h2>
    <p class="detail__text"> {{$plant->category->title}}</p>
    </div>
    <div class="detail__row">
    <h2 class="show__header">Description:</h2>
    <p class="detail__text">{{$plant->description}}</p>
    </div>

  @can('edit')
  <a href='/plants/{{$plant->id}}/edit'>
    <button class="show__button">Edit</button>
  </a>

  <form method='POST' action='/plants'>
    @csrf
    @method('DELETE')
    <input type="hidden" name="id" value="{{$plant->id}}">
    <button type="submit" class="show__button">Delete</button>
  </form>

  <form method='POST' action='{{ route('favourite.store', $plant->id) }}'>
    @csrf
    <button type="submit" class="show__button">Favourite</button>
  </form>
  @endcan
  </div>
</x-layout>