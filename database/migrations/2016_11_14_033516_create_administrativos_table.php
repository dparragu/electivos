<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministrativosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('administrativos', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->string('rut', 128)->index();
			$table->string('nombre', 255);
			$table->string('apellido', 255);
			$table->string('correo', 255);
			$table->string('telefono', 128);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('administrativos');
	}

}
