<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model {

	protected $table = 'docentes';

	protected $primaryKey = 'rut';


	public function asignaturas(){
		return $this->belongsToMany('App\Asignatura');
	}

}
