<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Plant;
// use Illuminate\Container\Attributes\Auth;
// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePostRequest;

class PlantController extends Controller
{
    function index ()
    {   
        $plants = Plant::paginate(10);
        //dd(Auth::user()->plants);
        //$images = Image::all();
        //$favourites = Auth::user()->plants;
        return view('plants.index',['plants' => $plants]); //'images' => $images, 'favourites' => $favourites
    }

    // Add favuorite controller - add index to show favourtie.

    function create ()
    {
        $categories = Category::all();
        return view('plants.create', ['categories' => $categories]);
    }

    function about ()
    {
        return view('plants.about');
    }

    function store(StorePostRequest $request)
    {
        // retrieve the uploaded file
        $file = $request->file('filename');
        // store inside public directory

        $path = $file->store('/','public');

        // $path = $file->store('/','public');
        
        // display image using asset()
        // $url = asset('storage/'.$path);
        // echo "<img src='".$url."'>";

        $plant = new Plant();
        $plant->product = $request->product;
        $plant->price = $request->price;
        $plant->description = $request->description;
        $plant->category_id = $request->category;
        $plant->filename = $path;
        $plant->save();
        return redirect('/plants');
    }

    function show ($id)
    {
        $plant = Plant::find($id);
        return view('plants.show', ['plant' => $plant]);
    }

    function edit ($id)
    {
        $plant = Plant::find($id);
        $categories = Category::all();
        return view('plants.edit', ['plant' => $plant, 'categories' => $categories]);
    }

    function update(StorePostRequest $request)
    {     
        $id = $request->input('id');
        $plant = Plant::find($id);
        $plant->product = $request->product;
        $plant->price = $request->price;
        $plant->description = $request->description;
        $plant->category_id = $request->category;

        if($request->hasFile('filename')) {
            if($plant->filename) {
                Storage::delete('public/'.$plant->filename);
            }

            $file = $request->file('filename');
            $path = $file->store('/','public');
            $plant->filename = $path;
        }

        $plant->save();
        return redirect('/plants');
    }

    function destroy(Request $request)
    {
        $id = $request->input('id');
        $plant = Plant::find($id);
        $plant->delete();
        return redirect('/plants');
    }

    // Search Facility
    public function search(Request $request)
    {
        $search = $request->input('search');
        $plants = Plant::where('product', 'like', "%$search%")
            ->paginate(10)
            ->appends(['search' => $search]); // keeps search term in pagination. 
        
        return view('plants.index', ['plants' => $plants]);
    }
}