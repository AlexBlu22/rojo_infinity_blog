<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;


    protected $primaryKey = 'id_developers';

    
    public function game(){
        return $this->belongsToMany(game::class, 'id_games');
    }
}
