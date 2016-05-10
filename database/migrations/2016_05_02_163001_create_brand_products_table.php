<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('brand_products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('brand_id')->unsigned();
			$table->integer('product_id')->unsigned();
			$table->tinyInteger('active')->default(1);			
			$table->timestamps();
			$table->unique(['brand_id', 'product_id']);			
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('brand_products');
	}

}
