<?php

namespace App\Http\Controllers;
use App\vente;
use Auth;
use App\User;
use App\Pannier;
use Session;
use Illuminate\Http\Request;


class PannierController extends Controller
{

    

    public function addPannier(Request $request,$vente_id){

        $check = Pannier::where('vente_id',$vente_id)->where('user_ip',request()->ip())->first();
        if($check){
            Pannier::where('vente_id',$vente_id)->where('user_ip',request()->ip())->increment('qty');
            return redirect()->back()->with('pannier','Votre produit a ete ajoute avec succes !');
        }else{

        Pannier::insert([
            'vente_id'=>$vente_id,
            'qty'=>1,
            'post_id'=>0,
            'image'=>0,
            'user_ip'=>request()->ip(),
            'montant'=>$request->montant, 
        ]);
        return redirect()->back()->with('pannier','Votre produit a ete ajoute avec succes !');
        
        }

    }

    public function getPannier(){
        $panniers = Pannier::where('user_ip',request()->ip())->latest()->get();
        $subtotal = Pannier::all()->where('user_ip',request()->ip())->sum(function($t){
            return  $t->montant*$t->qty;
          });
        return view('pages.pannier',compact('panniers','subtotal'));
    }

    public function destroy($pannier_id){
       Pannier::where('id',$pannier_id)->where('user_ip',request()->ip())->delete();
       return redirect()->back()->with('pannierdelete','Vouz avez supprimer un produit de votre pannier ');
    }

    public function update(Request $request,$pannier_id){

        Pannier::where('id',$pannier_id)->where('user_ip',request()->ip())->update([
        'qty' =>$request->qty,
        ]);
        return redirect()->back()->with('pannierUpdate','Qunatite de produit modifiée');


    }
    public function addPannierPost(Request $request,$post_id){

        $check = Pannier::where('post_id',$post_id)->where('user_ip',request()->ip())->first();
        if($check){
            Pannier::where('post_id',$post_id)->where('user_ip',request()->ip())->increment('qty');
            return redirect()->back()->with('pannier','Votre produit a ete ajoute avec succes !');
        }else{

        Pannier::insert([
            'post_id'=>$post_id,
            'vente_id'=>0,
            'image'=>$request->image,
            'qty'=>1,
            'user_ip'=>request()->ip(),
            'montant'=>$request->montant, 
        ]);
        return redirect()->back()->with('pannier','Votre produit a ete ajoute avec succes !');
        
        }

    }
    public function getPannierPost(){
        $panniers = Pannier::where('user_ip',request()->ip())->latest()->get();
        $subtotal = Pannier::all()->where('user_ip',request()->ip())->sum(function($t){
            return  $t->montant*$t->qty;
          });
        return view('pages.pannier',compact('panniers','subtotal'));
    }

  
    //
}
