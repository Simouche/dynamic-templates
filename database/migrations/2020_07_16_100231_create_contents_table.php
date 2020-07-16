<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->string('desciption',100);
            $table->string('round_image',255)->nullable();
            $table->string('background_color',20)->nullable();
            $table->string('background_image',255)->nullable();
            $table->string('link',1000)->nullable();
            $table->foreignId('menu')->nullable()->constrained('menu_titles')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contents');
    }
}
