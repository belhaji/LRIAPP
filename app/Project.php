<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public $fillable = ['titre', 'date_debut', 'date_fin'];
    public function member()
    {
        return $this->belongsTo(Member::class,'member_id');
    }

    public function sous_domaine()
    {
        return $this->belongsTo(SousDomaine::class,'sous_domaine_id');
    }
}
