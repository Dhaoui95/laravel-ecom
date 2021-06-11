<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pannier extends Model
{


    protected $fillable = ['user_ip','vente_id','montant','qty','image','vente_id'];


    public function vente(){
        return $this->belongsTo('App\vente');
    }
    public function user(){
        return $this->hasMany('App\User');
    }
    public function post(){
        return $this->belongsTo('App\post');
    }
    public static function  getTotal(){
        return  $total = Pannier::all()->where('user_ip',request()->ip())->sum(function($t){
            return  $t->montant*$t->qty;
          });
    }
    //
}
