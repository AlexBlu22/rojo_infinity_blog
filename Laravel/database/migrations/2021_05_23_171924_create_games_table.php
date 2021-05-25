<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->integer('id_games')->primary();
            $table->string('games_name')->nullable();
            $table->integer('games_price')->nullable();
            $table->string('games_des')->nullable();
            $table->date('games_time')->nullable();
            $table->unsignedInteger('store_id_store');
            $table->unsignedInteger('developers_id_developer');
            $table->unsignedInteger('products_product_id');
            $table->unsignedInteger('users_id_user');
            $table->unsignedInteger('comments_id_comment');
            $table->unsignedInteger('comments_id_author');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
