<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_user';

    public function store(){
        return $this->hasOne(store::class, 'id_store');
    }

    public function payment(){
        return $this->hasOne(paymentcard::class, 'users_id_user');
    }

    public comment(){
        return $this->hasMany(comment::class, 'id_author');
    }

    public function order(){
        return $this->hasMany(order::class, 'id_user');
    }

    public function article(){
        return $this->hasMany(article::class, 'author_id');
    }

    public function game(){
        return $this->belongsToMany(game::class, 'users_id_user');
    }
}
