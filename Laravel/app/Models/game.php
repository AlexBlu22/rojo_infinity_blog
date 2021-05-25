<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class game extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_games';

    public function developer(){
        return $this->belongsToMany(developer::class, 'id_designers');
    }

    
    public function designer(){
        return $this->belongsToMany(designer::class, 'id_developers');
    }

    public function product(){
        return $this->belongsTo(product::class);
    }

    public function user(){
        return $this->belongsTo(game::class, 'id_game');
    }
    
}
