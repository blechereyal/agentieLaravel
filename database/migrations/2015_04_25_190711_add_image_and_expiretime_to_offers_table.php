<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageAndExpiretimeToOffersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('offers', function(Blueprint $table)
		{
			$table->string('image')->nullable();
			$table->dateTime('expires_at')->nullable();
			$table->integer('places')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('offers', function(Blueprint $table)
		{
			$table->dropColumn('image');
			$table->dropColumn('expires_at');
			$table->dropColumn('places');
		});
	}

}
