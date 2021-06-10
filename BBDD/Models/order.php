<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id','product_id','id_user','number_products','total_price','discount'
    ];

    protected $primaryKey = 'order_id';

    public function product(){
        return $this->hasOne(product::class);
    }

    public function user(){
        return $this->belongsTo(user::class);
    }
}
