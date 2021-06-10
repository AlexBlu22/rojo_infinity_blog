<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id','article_title','article_author','publication_date','number_views','number_likes','id_comment','comments_id_comment','comments_id_author','author_id'
    ];
    
    protected $primaryKey = 'article_id';

    public function user(){
        return $this->hasOne(user::class);
    }

    public function comment(){
        return $this->hasMany(comment::class);
    }

}
