<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\post;
use App\Like;
use App\User;


class PostController extends Controller
{
    public function annonce(){
        return view('pages.ajout');
    }
    public function ajout(Request $request){
       

        $post= new Post();


        if($request->hasfile('photo'))
         {
            foreach($request->file('photo') as $file)
            {
                $name = time().'.'.$file->extension();
                $file->move(public_path('postImage'), $name);  
                $data[] = $name;  
            }
            $post->image=json_encode($data);
         }

      
        $post->marque =$request->marque;
        $post->user_id = Auth::user()->id; 
        $post->user_name = Auth::user()->name;
        $post->user_lastname = Auth::user()->lastname;
        $post->user_avatar = Auth::user()->avatar;    //NZIDU USER->NAME 
        $post->EtatProduit =$request->EtatProduit;
        $post->typeProduit =$request->typeProduit;
        $post->duree =$request->duree;
        $post->numSerie =$request->numSerie;
        $post->mail =$request->mail;
        $post->adresse =$request->adresse;
        $post->montant =$request->montant;
        $post->region =$request->region;
        $post->postal =$request->postal;
        $post->payment =$request->payment;
        $post->phone =$request->phone;
        $post->message =$request->message;
         
        $post->save();
        return redirect('index')->with("success","Votre poste a été ajoute avec succées !");
    
    }
    public function getPost(){
        $post=Post::OrderBy('id','DESC')->get();
        return view('pages.listeProduit', ['posts' => $post]);
    }

  
  
    public function like($id){
       $post_id =$id;
       $vente_id=0;
       $user_id = Auth::user()->id;
       $like = new Like();
       $like->post_id =$post_id;
       $like->user_id =$user_id;
       $like->vente_id =$vente_id;
       $like->like=1;
       $like->save();
       return back()->with('msgLike','You liked this post');
    }
    
    //
}
