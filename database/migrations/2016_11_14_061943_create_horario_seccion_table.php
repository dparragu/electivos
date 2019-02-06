<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorarioSeccionTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('horario_seccion', function(Blueprint $table)
		{
			$table->string('horario_id')->references('id')->on('horarios');
			$table->string('seccion_id')->references('id')->on('seccions');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('horario_seccion');
	}

}
