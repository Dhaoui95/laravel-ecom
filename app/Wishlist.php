<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
  protected $fillable=['montant','user_name','message','vente_id','user_ip','qty','marque','typeProduit','EtatProduit','image'];
    
    public function vente(){
        return $this->belongsTo('App\vente');
    }
    public function user(){
        return $this->hasMany('App\User');
    }
    //
}
