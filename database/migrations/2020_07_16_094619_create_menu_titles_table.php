<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_titles', function (Blueprint $table) {
            $table->id();
            $table->string('title',50);
            $table->string('description')->nullable();
            $table->string('background',255)->nullable();
            $table->string('background_image',255)->nullable();
            $table->string('round_image',255)->nullable();
            $table->boolean('visible')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_titles');
    }
}
