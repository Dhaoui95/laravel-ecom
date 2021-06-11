<?php

namespace App\Http\Controllers;
use App\vente;
use App\comment;
use App\User;
use App\post;
use Auth;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function storeComment(Vente $vente,User $user){


        Comment::create([
            'user_id' =>Auth::user()->getId(),
            'vente_id'=>$vente->id,
            'post_id'=>0,
            'commentaire'=>request('commentaire'),
            'comment_name'=>Auth::user()->getName(),
            'comment_avatar'=>Auth::user()->getAvatar(),
        ]);
        return back()->with('commentaire','Commentaire deposé');



      
    }
    public function storeCommentPost(Post $post,User $user){


        Comment::create([
            'user_id' =>Auth::user()->getId(),
            'post_id'=>$post->id,
            'vente_id'=>0,
            'commentaire'=>request('commentaire'),
            'comment_name'=>Auth::user()->getName(),
            'comment_avatar'=>Auth::user()->getAvatar(),
        ]);
        return back()->with('commentaire','Commentaire deposé');



      
    }
    
    //
}
