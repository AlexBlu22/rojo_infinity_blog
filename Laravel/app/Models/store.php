<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class store extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_store';


    public function user(){
        return $this->belongsTo(user::class);
    }
}
