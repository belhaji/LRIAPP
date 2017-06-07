<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoPerso extends Model
{
    public $timestamps = false;
    public $fillable = ['nom', 'prenom', 'tel', 'bio', 'adresse',
        'date_naissance', 'lieu_naissance', 'situation_familliale', 'status', 'linkedin', 'gplus',
        'laureat', 'date_prev'];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
