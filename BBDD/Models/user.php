<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user','username','user_password','user_email_verify','user_address','subscription_type','store_id_store','id_game'
    ];

    protected $primaryKey = 'id_user';

    public function store(){
        return $this->hasOne(store::class);
    }

    public function payment(){
        return $this->hasOne(paymentcard::class);
    }

    public comment(){
        return $this->hasMany(comment::class);
    }

    public function order(){
        return $this->hasMany(order::class);
    }

    public function article(){
        return $this->hasMany(article::class);
    }

    public function game(){
        return $this->belongsToMany(game::class);
    }
}
