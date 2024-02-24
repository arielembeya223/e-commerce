<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\annonceRequest;
use Illuminate\Http\UploadedFile;
use App\Http\Requests\productRequest;
use App\Models\annonce;
use App\Models\picture;
use App\Models\product;
use App\Models\store;
use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\commande;
class dashbordController extends Controller
{
    
    public function index(Request $request)
    {
        $id= $request->route('store');

       $mois=$this->mois($id);


        return view('dashbord.stat',['mois'=>$mois]);
    }
    private function mois($id): array {
    
        $months = [
            'janvier', 'février', 'mars', 'avril', 'mai', 'juin',
            'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre'
        ];
    
        
        $monthMapping = [
            'janvier' => '01',
            'février' => '02',
            'mars' => '03',
            'avril' => '04',
            'mai' => '05',
            'juin' => '06',
            'juillet' => '07',
            'août' => '08',
            'septembre' => '09',
            'octobre' => '10',
            'novembre' => '11',
            'décembre' => '12',
        ];
    
        $storeId = $id;
        
        $monthlyResults = [];
    
        foreach ($months as $month) {
            
            $monthNumeric = $monthMapping[$month];
    
            $count = DB::table('products')
                ->join('stores', 'products.store_id', '=', 'stores.id')
                ->where('products.store_id', $storeId)
                ->whereMonth(DB::raw('DATE(products.created_at)'), '=', $monthNumeric)
                ->count();
    
                $monthlyResults[] = $count;
        }
    
        return $monthlyResults;
    }
    
    public function home(Request $request)
    {
        $id= $request->route('store');
        
        $store = Store::findOrFail($id);

        $image=$store->picture->nom;

        $products = $store->products()->orderBy('created_at', 'desc')->get();
   
       
        return view("dashbord.home",['store'=>$store,'image'=>$image,'products'=> $products]);
    }
    public function message(Request $request)
    {
        $id= $request->route('store');
        $annonces = Annonce::where('store_id', $id)
       ->orderBy('created_at', 'desc')
       ->get();
        return view('dashbord.message',['annonces'=>$annonces]);
    }
    //publie le message
    public function postMessage(annonceRequest $request)
    {
      $data=$request->validated();

      $id= $request->route('store');

      $data['store_id']=$id;

      annonce::create($data);

      return back()->with('success','annonce publie');
    }
    public function gerer()
    {
        return view('dashbord.gerer');
    }
    public function compte(Request $request)
    {
        $id= $request->route('store');

        $messages = Message::where('store_id', $id)
       ->orderBy('created_at', 'desc')
       ->get();

       $commandes = Commande::whereHas('product', function ($query) use ($id) {
        $query->where('store_id', $id);
    })->orderBy('created_at', 'desc')->get();
     

        return view('dashbord.compte',['messages'=>$messages,'commandes'=>$commandes]);
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
            return back()->with('errors', 'image invalide');
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
