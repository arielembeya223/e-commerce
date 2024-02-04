<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class welcomeController extends Controller
{
    public function index()
     {
        return view('welcome');
     }
     public function product()
     {
      return view("product");
     }
     public function notif()
     {
      return view('notif');
     }
     public function users()
     {
      return view("users");
     }
     public function connection()
     {
      return view("connectUsers");
     }
     public function boutique()
     {
      return view("newBoutique");
     }
     public function connectBoutique()
     {
      return view("connectBoutique");
     }
}
