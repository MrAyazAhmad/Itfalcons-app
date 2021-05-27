<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMultipleColumnToPortfolios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->string('category',191)->nullable();
            $table->string('client',191)->nullable();
           $table->string('project_date',191)->nullable();
           $table->string('project_url',191)->nullable();
           $table->string('description',191)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('portfolios', function (Blueprint $table) {
            $table->dropColumn(['category',  'client', 'project_date', 'project_url', 'description']);
        });
    }
}
