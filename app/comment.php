<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable=['commentaire','comment_name','comment_avatar','user_id','vente_id','post_id'];
   

    public function user(){
        return $this->belongsTo('App\User');
    }
  //  public function post(){
    //    return $this->belongsTo(Post::class);
    //}

    public function users(){
      return $this->belongsTo('App\User');
    }
    public function ventes(){
      return $this->belongsTo('App\vente');
    }
    public function post(){
      return $this->belongsTo('App\post');
    }

   
}
