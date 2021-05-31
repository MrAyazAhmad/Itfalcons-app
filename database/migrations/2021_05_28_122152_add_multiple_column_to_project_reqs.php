<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumnToProjectReqs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_reqs', function (Blueprint $table) {
            $table->string('budget',191)->nullable();
            $table->string('deadline',191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_reqs', function (Blueprint $table) {
            $table->dropColumn(['budget',  'deadline']);
        });
    }
}
