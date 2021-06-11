<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    protected $fillable=['user_id','like','post_id','vente_id'];
    //
    public function post(){

        return $this->belongsTo('App\User');
        
        }
        public function user()
    {
        return $this->belongsTo('App\post');
    }
    public function vente(){

        return $this->belongsTo('App\User');
        
        }
}
