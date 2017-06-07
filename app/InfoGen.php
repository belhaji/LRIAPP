<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoGen extends Model
{
    public $timestamps = false;
    public $fillable = ['titre', 'description'];
}
