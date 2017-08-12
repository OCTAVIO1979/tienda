<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    protected $table = ('tecnicos');

    protected $fillable = ['name', 'tel', 'wp', 'email'];
}
