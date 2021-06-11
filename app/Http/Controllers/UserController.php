<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\User;
use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        return view('user.profile',array('user'=>Auth::user()));
    }
    public function update(Request $request)
    { 
      $user=auth()->user();
      $user->update([
          'name'=>$request->name,
          'lastname'=>$request->lastname,
          'email'=>$request->email,
          'avatar'=>$request->avatar,

      ]);
      if ($request->hasfile('avatar')){
        $file = $request->file('avatar');
        $extension = $file->getClientOriginalExtension();
        $filename = time() .'.'. $extension;
        $file->move(public_path("images"), $filename);
        $user->avatar = $filename;
       
    }else{
        
        $user->avatar=''; 
    }

        $user = Auth::user();
        $user->avatar = $filename;
        
        $user->save();
    

        return back()->with('profil','Vous avez mis a jour votre profil');
    }
    
    //
}
