<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SousDomaine extends Model
{
    public $fillable = ['titre', 'domaine_id'];
    public function domaine()
    {
        return $this->belongsTo(Domaine::class);
    }


    public function projects()
    {
        return $this->hasMany(Project::class,'sous_domaine_id');
    }
}
