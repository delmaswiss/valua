<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependenciesConstraints extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stories', function (Blueprint $table) {
            $table->foreign('epics_frmd')->on('epics')->references('id');
        });

        Schema::table('epics', function (Blueprint $table){
            $table->foreign('backlogs_frmd')->references('id')->on('backlogs');
        });

        Schema::table('backlogs', function (Blueprint $table) {
            $table->foreign('projekte_frmd')->references('id')->on('projekte');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    }
}
