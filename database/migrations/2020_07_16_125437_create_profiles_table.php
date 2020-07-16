<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('company_name',255)->nullable();
            $table->string('title',255)->nullable();
            $table->string('logo',255)->nullable();
            $table->string('address',1000)->nullable();
            $table->string('phone',1000)->nullable();
            $table->string('emails',1000)->nullable();
            $table->string('reception_email',255)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profiles');
    }
}
