<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    public $fillable = ['titre', 'etablissement', 'date_debut', 'date_fin', 'member_id'];
    public function member()
    {
        return $this->belongsTo(Member::class,'member_id');
    }
}
