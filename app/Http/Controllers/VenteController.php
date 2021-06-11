<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\vente;
use App\User;
use App\Like;
use App\Cart;
use Session;

class VenteController extends Controller
{
    public function annonceVente(){
        return view('pages.ajoutVente');
    }
    public function ajoutVente(Request $request){

        $vente= new Vente();


        if($request->hasfile('photo'))
        {
           foreach($request->file('photo') as $file)
           {
               $name = time().'.'.$file->extension();
               $file->move(public_path('postImage'), $name);  
               $data[] = $name;  
           }
           $vente->image=json_encode($data);
        }

         
        $vente->marque =$request->marque;
        $vente->user_id = Auth::user()->id;
        $vente->user_name = Auth::user()->name;
        $vente->user_lastname = Auth::user()->lastname;
        $vente->user_avatar = Auth::user()->avatar;
        $vente->EtatProduit =$request->EtatProduit;
        $vente->typeProduit =$request->typeProduit;
        $vente->duree =$request->duree;
        $vente->numSerie =$request->numSerie;
        $vente->mail =$request->mail;
        $vente->adresse =$request->adresse;
        $vente->montant =$request->montant;
        $vente->region =$request->region;
        $vente->postal =$request->postal;
        $vente->payment =$request->payment;
        $vente->phone =$request->phone;
        $vente->message =$request->message;
         
        $vente->save();
        return redirect('index')->with("success","Votre poste a été ajoute avec succées !");
    
    }
    public function getPostVente(){
        $vente=Vente::OrderBy('id','DESC')->get();
        
        return view('pages.listeVente', ['vente' => $vente]);
    }
    public function likeVente($id){
        $vente_id =$id;
        $post_id=0;
        $user_id = Auth::user()->id;
        $like = new Like();
        $like->vente_id =$vente_id;
        $like->user_id =$user_id;
        $like->post_id=$post_id;
        $like->like=1;
        $like->save();
        return back()->with('msgLike','You liked this post');
     }
   /*  public function getAddToCart(Request $request , $id){
         $vente = Vente::find($id);
         $oldCart = Session::has('cart')?Session::get('cart') : null;
         $cart = new Cart($oldCart);
         $cart->add($vente,$vente->id);
         $request->session()->put('cart',$cart);
         dd($request->session()->get('cart'));   //yabaath jawou behy
         return back();
     }
     public function Cartajout(){
        
         if (Session::has('cart')){
             return view('pages.pannier');
         }
         $oldcart =Session::get('cart');
         $cart = new Cart();
         return view('pages.pannier' ,['vente'=>$cart->items,'totalprice' =>$cart->totalprice]);
    }
    */
    /*public function filtreCategorie(Request $request){
       // $vente=Vente::where('id',$request->typeProduit)->get();
       $query= Vente::where('typeProduit',$request->input('typeProduit'));
       if($request->has('typeProduit')){
           $query->where('climatiseur','LIKE','%'.$request->input('typeProduit').'%');
       }
       return view('pages.home',['vente'=>$query->get()]);
    }*/
    
}
