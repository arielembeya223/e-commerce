<?php

namespace App\Http\Controllers;

use App\Models\store;
use Illuminate\Http\Request;

class dashbordController extends Controller
{
    public function index()
    {
        return view('dashbord.stat');
    }
    public function home(Request $request)
    {
        $id= $request->route('store');
        
        $store = Store::findOrFail($id);

        $image=$store->picture->nom;
    
        return view("dashbord.home",['store'=>$store,'image'=>$image]);
    }
    public function message()
    {
        return view('dashbord.message');
    }
    public function gerer()
    {
        return view('dashbord.gerer');
    }
    public function compte()
    {
        return view('dashbord.compte');
    }
    public function newProducts()
    {
        
    }
}
