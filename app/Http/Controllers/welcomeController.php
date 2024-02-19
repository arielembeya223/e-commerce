<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\boutiqueRequest;
use App\Http\Requests\connectRequest;
use App\Models\picture;
use App\Models\store;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\support\Facades\Auth;
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
     //methode qui uppload les images
     private function picture(UploadedFile $file)
     { 
         try {
             $path = $file->store('public','public');  // Stockez le fichier dans le répertoire 'public'
             return $path;
         } catch (\Exception $e) {
             return dd($e->getMessage('impossible de telecharger l\' image'));
         }
     }
     
     public function newBoutique(boutiqueRequest $request)
     {
     
         $data = $request->validated(); // Valider les données

         $image = $this->picture($request->file('image'));
     
         if ($image === false) {
             return redirect()->back()->withErrors(['image' => 'Le téléchargement du logo a échoué.']);
         }
     
         $data['image'] = $image;

         $chemin=$data['image'];

        $newpicture=picture::create([
            'nom'=>$chemin,
            "chemin"=>$chemin
         ]);
         unset($data['image']);

         $data['picture_id']=$newpicture->getKey();

         $credidentials=['nom'=>$data['nom'],'password'=>$data['password']];//donnees de connexion
         
         $password=$data['password'];
        
         $data['password']=Hash::make($password);

         $store=store::create($data);

         Auth::guard('store')->attempt($credidentials);   
         
         Session::regenerate();
         
         $user=Auth::guard('store')->user();
         
         $userID=$user->id;
         
         return redirect()->route('private.compte', ['store' => $user->id]);

     }
     
     public function boutiqueConnect(connectRequest $request)
     {
        if(Auth::guard('store')->attempt($request->validated())){

            Session::regenerate();

            $user=Auth::guard('store')->user();

            $userID=$user->id;

            $userNom=$user->nom;

            return redirect()->route('private.compte', ['store' => $user->id])->with('success', 'Bon retour ' . $userNom);

        }else{

            return back()->with('errors', 'nom ou mot de passe incorrrect(s)');
        }
     }
     
}
