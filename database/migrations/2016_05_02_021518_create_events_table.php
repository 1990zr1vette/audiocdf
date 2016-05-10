<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('title_fr');	
			$table->string('dates');
			$table->string('dates_fr');
			$table->text('event');
			$table->text('event_fr');
			$table->text('image');				
			$table->tinyInteger('active')->default(1);
			$table->tinyInteger('current')->default(0);				
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}
