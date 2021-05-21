<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_videos', function (Blueprint $table) {
            $table->id();
            $table->string('video',191)->nullable;
            $table->string('heading',191)->nullable;
            $table->string('des',191)->nullable;
            $table->string('sudes1',191)->nullable;
            $table->string('sudes2',191)->nullable;
            $table->string('sudes3',191)->nullable;
            $table->string('sudes4',191)->nullable;
            $table->string('des2',191)->nullable;
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
        Schema::dropIfExists('about_videos');
    }
}
