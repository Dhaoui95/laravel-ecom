<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Vente;
use App\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function view(){
        $user = Auth::user();
        $wishlists = Wishlist::where("user_ip", "=", $user->ip())->orderby('id', 'desc')->paginate(10);
        return view('pages.wishlist',compact('user', 'wishlists'));
    }

    public function addWishlist(Request $request,$vente_id){

        $check = Wishlist::where('vente_id',$vente_id)->where('user_ip',request()->ip())->first();
        if($check){
            Wishlist::where('vente_id',$vente_id)->where('user_ip',request()->ip())->increment('qty');
            return redirect()->back()->with('wishlist','Votre produit a ete ajoute avec succes !');
        }else{

            Wishlist::insert([
            'vente_id'=>$vente_id,
            'qty'=>1,
            'message'=>$request->message,
            'image'=>$request->image,
            
            'user_name'=>$request->user_name,
            'user_ip'=>request()->ip(),
            'montant'=>$request->montant,
            'marque'=>$request->marque,
            'typeProduit'=>$request->typeProduit,
            'EtatProduit'=>$request->EtatProduit, 
        ]);
        return redirect()->back()->with('wishlist','Votre produit a ete ajoute au liste favoris avec sucess !');
        
        }

    }
   public function getWishlist(){
        $wishlists = Wishlist::where('user_ip',request()->ip())->latest()->get();
      
        return view('pages.wishlist',compact('wishlists',$wishlists));
    }
    public function destroy($wish_id){
        Wishlist::where('id',$wish_id)->where('user_ip',request()->ip())->delete();
        return redirect()->back()->with('wishDelete','Vouz avez supprimer un produit de votre wishlist ');
     }
    //
}
