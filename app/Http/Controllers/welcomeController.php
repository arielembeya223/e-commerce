<?php

namespace App\Http\Controllers;

use App\Http\Requests\boutiqueRequest;
use App\Models\picture;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

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
     private function picture(UploadedFile $file)
     {
         try {
             $path = $file->store('public');  // Stockez le fichier dans le répertoire 'public'
             return $path;
         } catch (\Exception $e) {
             return false;
         }
     }
     
     public function newBoutique(boutiqueRequest $request)
     {
         $data = $request->validated();
         $image = $this->picture($request->file('logo'));
     
         if ($image === false) {
             return redirect()->back()->withErrors(['logo' => 'Le téléchargement du logo a échoué.']);
         }
     
         $data['logo'] = $image;
         dd($data);
     }
     
     
}
