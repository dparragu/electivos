<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumnos', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->string('rut', 128)->index();
			$table->string('malla_id')->references('id')->on('mallas');
			$table->string('situacion_id')->references('id')->on('situacions');
			$table->string('nombre', 255);
			$table->string('apellido', 255);
			$table->string('correo', 255);
			$table->string('telefono', 15);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alumnos');
	}

}
