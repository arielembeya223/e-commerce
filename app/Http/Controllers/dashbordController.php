<?php

namespace App\Http\Controllers;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\productRequest;
use App\Models\picture;
use App\Models\product;
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

        $products=$store->products;
   
    
        return view("dashbord.home",['store'=>$store,'image'=>$image,'products'=> $products]);
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
         
    public function newProducts(productRequest $request)
    {
        $data = $request->validated(); // Valider les données

        $image = $this->picture($request->file('image'));
    
        if ($image === false) {
            return back()->with('error', 'image invalide');
        }
    
        $data['image'] = $image;

        $chemin=$data['image'];

       $newpicture=picture::create([
           'nom'=>$chemin,
           "chemin"=>$chemin
        ]);
        unset($data['image']);

        $data['picture_id']=$newpicture->getKey();

        $data['store_id']=$request->route('store');

        $product=product::create($data);

        return back()->with('success', 'Bravo, votre produit a été publié');
    }
}
