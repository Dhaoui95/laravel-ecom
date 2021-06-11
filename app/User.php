<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable 
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','lastname', 'email', 'password','avatar',    
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function likes(){

        return $this->hasMany('App\Like');
    } 
    public function pannier(){

        return $this->hasMany('App\Pannier');
    }        
   public function post(){
    return $this->hasMany('App\post');
}
public function vente(){
    return $this->hasMany('App\vente');
}
public function comments(){
    return $this->hasMany('App\comment');
}
public function getId(){
    return $this->id;
}
public function getName(){
    return $this->name;
}
public function getAvatar(){
    return $this->avatar;
}
public function getEmail(){
    return $this->email;
}
public function getLastname(){
    return $this->lastname;
}

public function user()
{
  return $this->belongsTo('App\User');
}
public function wishlist(){
    return $this->hasMany('App\Wishlist');
}
}
