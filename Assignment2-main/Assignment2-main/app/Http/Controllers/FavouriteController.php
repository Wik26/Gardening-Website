<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class FavouriteController extends Controller
{
    function index ()
    {   
        $plants = Auth::user()->plants;
        return view('favourite.index',['plants' => $plants]);
    }

    public function store ($id) 
    {
        $plant = Plant::findOrFail($id);
        // Users can add to favourites
        $user = Auth::user();
        $user->plants()->syncWithoutDetaching($plant->id);
        return redirect()->route('favourite.index');
    }
}
