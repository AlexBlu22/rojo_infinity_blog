<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentcard extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_paymentcard','paymentcard_number','paymentcard_headline','paymentcard_expiration','paymentcard_type','payment_cvc','users_id_user'
    ];

    protected $primaryKey = 'id_paymentcard';


    public function user(){
        return $this->belongsTo(user::class);
    }

    public function payment(){
        return $this->hasMany(payment::class);
    }
}
