<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model {

	protected $table = 'asignaturas';

	protected $primaryKey = 'id';

	public function seccions(){
		return $this->hasMany('App\Seccion');
	}

	public function docentes(){
		return $this->belongsToMany('App\Docente');
	}

	public function administrativos(){
		return $this->belongsToMany('App\Administrativo');
	}

	public function alumnos(){
		return $this->belongsToMany('App\Alumno');
	}

}