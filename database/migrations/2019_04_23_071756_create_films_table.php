<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

/**
 * Class CreateFilmsTable.
 */
class CreateFilmsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('films', function (Blueprint $table) {
			$table->increments('id');
			$table->string('name_film');
			$table->string('img');
			$table->date('projection_date');
			$table->string('projection_time');
			$table->integer('id_type_cinema')->unsigned();
			$table->integer('id_cinema')->unsigned();
			$table->integer('id_vote')->unsigned();
			$table->foreign('id_type_cinema')->references('id')->on('type_cinema');
			$table->foreign('id_cinema')->references('id')->on('cinemas');
			$table->foreign('id_vote')->references('id')->on('votes');
			$table->string('language');
			$table->string('age_limit');
			$table->string('detail', 3000);
			$table->string('trailer_url');
			$table->decimal('price_film');
			$table->string('curency');
			$table->integer('vote_number');
			$table->integer('register_number');
			$table->timestamps();
		});
	}

	public function down() {
		Schema::drop('films');
	}
}
