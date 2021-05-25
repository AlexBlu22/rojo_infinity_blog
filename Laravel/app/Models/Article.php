<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'article_id';

    public function user(){
        return $this->hasOne(user::class);
    }

    public function comment(){
        return $this->hasMany(comment::class.'id_article');
    }

}
