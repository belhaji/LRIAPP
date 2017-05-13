<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function infoPerso()
    {
        return $this->hasOne(InfoPerso::class, 'member_id');
    }

    public function laureat()
    {
        return $this->hasOne(Laureat::class, 'member_id');
    }

    public function equipe()
    {
        return $this->belongsTo(Equipe::class);
    }

    public function projects()
    {
        return $this->hasMany(Project::class, 'member_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'member_id');
    }

    public function events()
    {
        return $this->hasMany(Event::class, 'member_id');
    }

    public function publications()
    {
        return $this->hasMany(Publication::class, 'member_id');
    }


}
