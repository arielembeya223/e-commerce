<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashbordController extends Controller
{
    public function index()
    {
        return view('dashbord.stat');
    }
    public function home()
    {
        return view("dashbord.home");
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
