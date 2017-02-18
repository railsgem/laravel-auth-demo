<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

		Schema::create('sales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sales_person_name');
			$table->string('name_of_cafe');
			$table->string('street');
			$table->string('suburb');
			$table->string('postcode');
			$table->string('pos');
			$table->string('contact_person');
			$table->string('contact_number');
			$table->string('email');
			$table->string('website');
			$table->text('comment');
			$table->string('size');
			$table->string('level_of_interest');
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
        //
            Schema::drop('sales');
    }
}
