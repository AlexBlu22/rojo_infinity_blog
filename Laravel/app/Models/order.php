<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;

    protected $primaryKey = 'order_id';

    public function product(){
        return $this->hasOne(product::class,'product_id');
    }

    public function user(){
        return $this->belongsTo(user::class);
    }
}
