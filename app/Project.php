<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function member()
    {
        return $this->belongsTo(Member::class,'member_id');
    }

    public function sous_domaine()
    {
        return $this->belongsTo(SousDomaine::class,'project_id');
    }
}
