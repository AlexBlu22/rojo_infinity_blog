<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class designer extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_designers';

    
    public function game(){
        return $this->belongsToMany(game::class, 'id_games');
    }
}
