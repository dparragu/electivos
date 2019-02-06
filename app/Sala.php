<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model {

	protected $table = 'salas';

	protected $primaryKey = 'id';

	public function horarios(){
		return $this->belongsToMany('App\Horario');
	}

}
