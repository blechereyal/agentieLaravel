<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfferSubscriptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offer_subscriptions', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('offer_id')->unsigned()->default(0);
			$table->foreign('offer_id')->references('id')->on('offers')->onDelete('cascade');

			$table->integer('people');
			$table->string('name');
			$table->string('email');
			$table->string('phone');
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
		Schema::drop('offer_subscriptions');
	}

}
