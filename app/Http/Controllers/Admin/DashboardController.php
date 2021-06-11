<?php

namespace App\Http\Controllers\Admin;
use App\User;
use App\About;
use Auth;
use App\Vente;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    
    public function registered(){
        $users= User::all();
        return view('admin.register')->with('users',$users);
    }
    public function registeredit(Request $request,$id)
    {
        $users =User::findOrFail($id);
        return view('admin.edit')->with('users',$users);
    }
    //
    public function registerupdate(Request $request,$id){
        $users=User::find($id);
        $users->name=$request->input('name');
        $users->lastname=$request->input('lastname');
        $users->email=$request->input('email');
        $users->update();
        return redirect('/role-register')->with('statusUpdate','Vous avez modifier le profile selectionne');
    }
    public function registerdelete($id){
        $users=User::findOrFail($id);
        $users->delete();
        return redirect('/role-register')->with('statusDelete','Vous avez supprimer le profile selectionne');
    }
    public function produit(){
        $vente=Vente::all();
        return view('admin.produit')->with('vente',$vente);
    }
    public function Ajoutproduit(Request $request){
        $Adminvente= new Vente();

        $Adminvente->typeProduit=$request->input('typeProduit');
        $Adminvente->marque=$request->input('marque');
        $Adminvente->EtatProduit=$request->input('EtatProduit');
        $Adminvente->phone=$request->input('phone');
        $Adminvente->mail=$request->input('mail');
        $Adminvente->message=$request->input('message');
        $Adminvente->region=$request->input('region');
        $Adminvente->postal=$request->input('postal');
        $Adminvente->duree=$request->input('duree');
        $Adminvente->montant=$request->input('montant');
        $Adminvente->numSerie=$request->input('numSerie');
        $Adminvente->payment=$request->input('payment');
        $Adminvente->adresse=$request->input('adresse');
        $Adminvente->user_id=auth::user()->id;
        $Adminvente->user_avatar=auth::user()->avatar;
        $Adminvente->user_lastname=auth::user()->lastname;
        $Adminvente->user_name=auth::user()->name;
        
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() .'.'. $extension;
            $file->move(public_path("postImage"), $filename);
            $Adminvente->image = $filename;
           
        }else{
            
            $Adminvente->image=''; 
        }
        $Adminvente->image=$request->input('image');
        
        $Adminvente->save();
        return redirect('role-produit')->with('ajoutProd','Vous avez ajouter un nouveau Produit');

    }
    public function produitAff(){
        $vente=Vente::all();
        return view('admin.produit')->with('vente',$vente);
    }
    public function editProd($id){
        $vente= Vente::findOrFail($id);
        return view('admin.editProd')->with('vente',$vente);
    }
    public function proddelete($id){
        $vente=Vente::findOrFail($id);
        $vente->delete();
        return redirect('/role-produit')->with('statusDelete','Vous avez supprimer le produit selectionne');
    }
    public function about(){
        return view('admin.about');
    }
    public function storeAbout(Request $request){
        $about= new About();
        $about->service_name=$request->input('service_name');
        $about->service_description=$request->input('service_description');
        $about->save();
        return redirect('/about')->with('about','Vous avez mis a jour la page');
    }
    public function afficheAbout(){
        $about=About::get();
        return view('pages.about',['about'=>$about]);
    }
}
