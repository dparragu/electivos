<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('seccions', function(Blueprint $table)
		{
			$table->engine = 'InnoDB';
			$table->string('id', 128)->index();
			$table->integer('asignatura_id')->references('id')->on('asignaturas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('seccions');
	}

}
