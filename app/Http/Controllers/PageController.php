<?php

namespace App\Http\Controllers;
use App\vente;
use App\User;
use App\About;
use App\Pannier;
use App\post;
use Stripe\Stripe;
use Stripe\PaymentIntent;
use App\Category;
use Illuminate\Support\Arr;


use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('pages.home');
    }
    public function ajouterrr(){
        return view('pages.ajouterrr');
    }
    public function registerWelcome(){
        return view('registerWelcome');
    }
    public function getAbout(){
        $about=About::inRandomOrder()->get();
        return view('pages.about',['about' =>$about]);

    }
    public function getPostVente(Request $request){
        if ($request->ajax()) {
            echo $request->start;
            # code...
        }else{


        $categories=Category::all();

        $vente=Vente::inRandomOrder()->get();
        
        return view('pages.home', ['vente' => $vente])->withCategories($categories);
        }
    }

    public  function getProfile($id){
        $user=User::find($id)->get();
        
        return view('pages.account',['user'=>$user]);
       
    }
  
   /* public function filtre(){
        $vente= Vente::all();
        $typeProduit=Vente::where('typeProduit',request()->typeProduit)->get();
        //return view('pages.home',['vente'=>$typeProduit]);
        
    }*/

    public function search(){
         $q=request()->input('q');

         $vente= Vente::where('typeProduit','like',"%$q%")->orWhere('marque','like',"%$q")->paginate(6);
         return view('pages.homeSearch',['vente'=>$vente]);
    }
    public function price(){
        $q=request()->input('q');

        $vente= Vente::where('typeProduit','like',"%$q%")->orWhere('marque','like',"%$q")->paginate(6);
        return view('pages.homeSearch',['vente'=>$vente]);
   }
   public function filtre(){
    $vente=Vente::lastest();
    $typeProduit=request()->input('typeProduit');
if($typeProduit=request('typeProduit'))
    $vente->where('typeProduit','like',"%$typeProduit%");
    $vente=$vente->get();
    return view('pages.homeType',['vente'=>$vente]);
}

public function payment(){
    \Stripe\Stripe::setApiKey('sk_test_51I5wweCwbWwxcnrkt6qXPPIX895G1yGiVR3W9FKCyUhCBGMluO0a9Q6PQlsifTcii3taJKZXc4C8jBCSN2ZSu5g600hlgd1o25');
        		
		
    $amount = 100;
    $amount *= 100;
    $amount = (int) $amount;
    
    $payment_intent = \Stripe\PaymentIntent::create([
        'description' => 'Stripe Test Payment',
        'amount' => $amount,
        'currency' => 'INR',
        'description' => 'Payment From Codehunger',
        'payment_method_types' => ['card'],
    ]);
    $intent = $payment_intent->client_secret;
		return view('pages.checkout',compact('intent'));
}
public function afterpayment(){
    return redirect('/index')->with('payment','Payment Has been Received check strip');

}
    
   
    //
}
