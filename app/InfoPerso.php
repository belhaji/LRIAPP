<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoPerso extends Model
{
    public $timestamps = false;

    public function member(){
        return $this->belongsTo(Member::class);
    }
}
