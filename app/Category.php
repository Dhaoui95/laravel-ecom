<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function ventes(){
        return $this->belongsTo('App\vente');
    }
    
}
