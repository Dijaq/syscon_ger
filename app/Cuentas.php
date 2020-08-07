<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cuentas extends Model
{
	public $table = 'cuentas';
/*
    public function user()
    {
    	return $this->belongsTo(User::class, 'idUser');
    }

    public function encuestaOpciones()
    {
        return $this->hasMany(EncuestaOpciones::class, 'idEncuesta');
    }*/
}
