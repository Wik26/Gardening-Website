<x-layout title="Edit Plant">
  <h1 class="centre__heading">Edit {{$plant->product}} Details</h1>
 
  <div class="form__container">
 
  <form class="plant__form" method='POST' action='/plants'>
    @csrf
    @method('PATCH')
    <input type="hidden" name="id" value="{{$plant->id}}">
    <div class="plant__div">
        <label for="product">Product:</label>
        <input type="text" id="product" name="product" value="{{$plant->product}}" class="plant__input @error('product') has-error @enderror"/>
        @error('product')
            <div class="error__msg">{{ $message }}</div>
        @enderror
    </div>
    <div class="plant__div">
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="{{$plant->price}}" class="plant__input @error('price') has-error @enderror"/>
        @error('price')
            <div class="error__msg">{{ $message }}</div>
        @enderror
    </div>
    <div class="plant__div">
        <label for="description">Description:</label>
        <input type="text" id="description" name="description" value="{{$plant->description}}" class="plant__input @error('description') has-error @enderror"/>
        @error('description')
            <div class="error__msg">{{ $message }}</div>
        @enderror
    </div>

    <div class="plant__div">
        <label for="category">Category:</label>
        <select name="category" id="category" class="plant__select">
            @foreach ($categories as $category)
                <option value="{{$plant->category_id}}">{{$category->title}}</option>
                <!-- <option value="{{$category->id}}">{{$category->title}}</option> -->
            @endforeach
        </select>
    </div>

    <div class="plant__div">
        <label for="filename">Image:</label>
        <input type="file" name="filename" id="filename" class="plant__select @error('filename') has-error @enderror" accept="image/*">
        @error('filename')
            <div class="error__msg">{{ $message }}</div>
        @enderror
        <img src="{{ asset('storage/'.$plant->filename) }}" alt="image" width="100px" height="75px">
    </div>
        <!-- <input type="text" id="category" name="category" value="{{$plant->category}}"> -->
    
        <button type="submit" class="form__button2">Save</button>
  </form>
</div>
</x-layout>