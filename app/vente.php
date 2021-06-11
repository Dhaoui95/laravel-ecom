<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vente extends Model
{
    protected $fillable=['duree','marque','numSerie','phone','mail','EtatProduit','message','montant',
    'payment','postal','typeProduit','adresse','image','region','user_id','user_name','user_lastname','user_avatar'];
    //
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
public function categories(){
    return $this->belongsTo('App\Category','cat_id');
}
public function wishlist()
{
    return $this->hasMany('App\Wishlist');
}
}
