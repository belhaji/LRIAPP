<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    public $fillable = ['titre' , 'description', 'lieux', 'date', 'published'];
    public function member()
    {
        return $this->belongsTo(Member::class, 'member_id');
    }
}
