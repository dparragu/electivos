<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Administrativo extends Model {

	protected $table = 'administrativos';

	protected $primaryKey = 'rut';

	public function asignaturas(){
		return $this->belongsToMany('App\Asignatura');
	}

	public function delete()
	{
		
        if(count($this->asignaturas) > 0){
        	$this->asignaturas()->detach();
        }

	}

}
