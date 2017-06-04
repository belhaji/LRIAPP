<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model
{
    public $timestamps = false;

    public $fillable = ['nom', 'description', 'responsable_id'];

    public function members()
    {
        return $this->hasMany(Member::class, 'equipe_id');
    }

    public function responsable()
    {
        return $this->belongsTo(Member::class, 'responsable_id');
    }
}
