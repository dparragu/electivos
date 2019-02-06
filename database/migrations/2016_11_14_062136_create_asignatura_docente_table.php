<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsignaturaDocenteTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('asignatura_docente', function(Blueprint $table)
		{
			$table->string('asignatura_id')->references('id')->on('asignaturas');
			$table->string('doncente_id')->references('rut')->on('docentes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('asignatura_docente');
	}

}
