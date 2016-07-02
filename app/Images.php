<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable = [
        'post_id',
        'imgName',
    ];

    public function posts(){
        return $this->belongsTo(Post::class, 'post_id');
    }
}