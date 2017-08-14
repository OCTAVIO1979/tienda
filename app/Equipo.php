<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = ('equipos');

    protected $fillable = [
    	'name', 'tel', 'wp', 'email', 'modelo', 'imei', 'ref', 'falla', 'preinicial', 'reparacion', 
    	'prefinal', 'fechaentrega', 'tecnico'

    	];
}
