<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model {

	protected $table = 'alumnos';

	protected $primaryKey = 'rut';

	public function mallas()
    {
        return $this->belongsTo('App\Malla');
    }

    public function situacions()
    {
        return $this->belongsTo('App\Situacion');
    }

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
