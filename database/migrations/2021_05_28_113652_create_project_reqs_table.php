<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectReqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_reqs', function (Blueprint $table) {
            $table->id();
            $table->string('name',191)->nullable();
            $table->string('email',191)->nullable();
            $table->string('technology',191)->nullable();
            $table->string('requirement',191)->nullable();
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
        Schema::dropIfExists('project_reqs');
    }
}
