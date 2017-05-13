<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    public $timestamps = false;

    public function members()
    {
        return $this->hasMany(Member::class,'equipe_id');
    }
}
