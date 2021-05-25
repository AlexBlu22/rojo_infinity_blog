<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentcard extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_paymentcard';


    public function user(){
        return $this->belongsTo(user::class);
    }

    public function payment(){
        return $this->hasMany(payment::class,'paymentcard_id_paymentcard');
    }
}
