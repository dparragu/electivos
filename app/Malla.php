<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Malla extends Model {

	protected $table = 'mallas';

	protected $primaryKey = 'id';

	public function alumnos()
    {
        return $this->hasMany('App\Alumno', 'malla_id', 'id');
    }

}
