<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    
    // 
    protected $fillable=['duree','marque','numSerie','phone','mail','EtatProduit','message','montant',
'payment','postal','typeProduit','adresse','image','region','user_id','user_avatar','user_lastname','user_name'];
     


public function user()
{
    return $this->belongsTo('App\User');
}
public function like()
{
    return $this->hasMany('App\Like');
}
public function comment(){
    return $this->hasMany('App\comment');
}

}
