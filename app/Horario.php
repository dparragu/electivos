<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model {

	protected $table = 'horarios';

	protected $primaryKey = 'id';

	public function salas(){
		return $this->belongsToMany('App\Sala');
	}

	public function seccions(){
		return $this->belongsToMany('App\Seccion');
	}

}
