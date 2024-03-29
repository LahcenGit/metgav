<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function articles()
    {
        return $this->belongsTo(Article::class,'article_id');
    }

    public function actualites()
    {
        return $this->belongsTo(Actualite::class,'actualite_id');
    }

}

