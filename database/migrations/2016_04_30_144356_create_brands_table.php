<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('brands', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('brand');
			$table->text('about');
			$table->text('about_fr');
			$table->string('keywords');
			$table->string('keywords_fr');
			$table->string('description');
			$table->string('description_fr');
			$table->string('website');			
			$table->string('image');
			$table->tinyInteger('active')->default(1);			
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
		Schema::drop('brands');
	}

}
