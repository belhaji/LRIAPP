<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    public function sousDomaines()
    {
        return $this->hasMany(SousDomaine::class,'domaine_id');
    }
}
