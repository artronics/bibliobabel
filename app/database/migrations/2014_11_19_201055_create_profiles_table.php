<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('user_id');
            $table->string('username');//->unique();
            $table->string('profile_pic')->default('male');
			$table->string('location')->nullable();
			$table->text('about')->nullable();
			$table->string('twitter_username')->nullable();
			$table->string('facebook_username')->nullable();
            $table->enum('privacy', array('public', 'private', 'protected'))->default('protected');
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
		Schema::drop('profiles');
	}

}
