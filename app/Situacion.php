<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Situacion extends Model {

	protected $table = 'situacions';

	protected $primaryKey = 'id';

	public function alumnos()
    {
        return $this->hasMany('App\Alumno', 'situacion_id', 'id');
    }

}
