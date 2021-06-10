<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_store','user_id','juegos','carrito','factura'
    ];

    protected $primaryKey = 'id_store';


    public function user(){
        return $this->belongsTo(user::class);
    }
}
