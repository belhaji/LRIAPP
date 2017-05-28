<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public $fillable = ['titre', 'desc', 'date_debut', 'date_fin'];

    public function member(){
        return $this->belongsTo(Member::class,'member_id');
    }
}
