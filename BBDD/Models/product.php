<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id','product_name','number_copies','price'
    ];

    protected $primaryKey = 'product_id';

    public function order(){
        return $this->belongsTo(order::class);
    }

    public function game(){
        return $this->hasMany(game::class);
    }

}
