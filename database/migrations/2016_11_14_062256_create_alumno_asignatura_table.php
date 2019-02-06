<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoAsignaturaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumno_asignatura', function(Blueprint $table)
		{
			$table->string('alumno_id')->references('rut')->on('alumnos');
			$table->string('asignatura_id')->references('id')->on('asignaturas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alumno_asignatura');
	}

}
