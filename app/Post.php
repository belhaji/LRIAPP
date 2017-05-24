<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $fillable = ['titre', 'contenu', 'published'];
    public function member()
    {
        return $this->belongsTo(Member::class,'member_id');
    }
}
