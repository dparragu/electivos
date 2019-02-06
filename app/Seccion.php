<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Seccion extends Model {

	protected $table = 'seccions';

	protected $primaryKey = 'id';

	public function horarios(){
		return $this->belongsToMany('App\Horario');
	}


	public function asignaturas(){
		return $this->belongsTo('App\Asignatura');
	}


}
