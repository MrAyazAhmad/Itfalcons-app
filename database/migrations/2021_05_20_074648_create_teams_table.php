<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('image',191)->nullable;
            $table->string('name',191)->nullable;
            $table->string('designation',191)->nullable;
            $table->string('fb',191)->nullable;
            $table->string('twt',191)->nullable;
            $table->string('inst',191)->nullable;
            $table->string('lnkd',191)->nullable;
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
        Schema::dropIfExists('teams');
    }
}
