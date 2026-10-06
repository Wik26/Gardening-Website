<x-layout title="Add New Plant">
    <h1 class="centre__heading">New Plant</h1>  

    <div class="form__container">
    <form class="plant__form" method='POST' action='/plants' enctype="multipart/form-data">
    @csrf
    <div class="plant__div">
        <label for="product">Product:</label>
        <input type="text" id="product" name="product" value="{{ old('product') }}" placeholder="Enter product name" class="plant__input @error('product') has-error @enderror"/>
        @error('product')
            <div class="error__msg">{{ $message }}</div>
        @enderror
    </div>
    <div class="plant__div">
        <label for="price">Price:</label>
        <input type="text" id="price" name="price" value="{{ old('price') }}" placeholder="Enter price" class="plant__input @error('price') has-error @enderror"/>
        @error('price')
            <div class="error__msg">{{ $message }}</div>
        @enderror
    </div>
    <div class="plant__div">
        <label for="description">Description:</label>
        <input type="text" id="description" name="description"  value="{{ old('description') }}" placeholder="Enter description" class="plant__input @error('description') has-error @enderror"/>
        @error('description')
            <div class="error__msg">{{ $message }}</div>
        @enderror
    </div>
    <div class="plant__div">
        <label for="category">Category:</label>
        <select name="category" id="category" class="plant__select">
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->title}}</option>
            @endforeach
        </select>
    </div>
    <div class="plant__div">
        <label for="filename">Image:</label>
        <input type="file" name="filename" id="filename" class="plant__select @error('filename') has-error @enderror" accept="image/*">
        @error('filename')
            <div class="error__msg">{{ $message }}</div>
        @enderror
    </div>

        <button type="submit" class="form__button">Submit</button>
    </form>
    </div>

</x-layout>