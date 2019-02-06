<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradorAsignaturaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('administrador_asignatura', function(Blueprint $table)
		{
			$table->string('administrativo_id')->references('rut')->on('administrativos');
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
		Schema::drop('administrador_asignatura');
	}

}
