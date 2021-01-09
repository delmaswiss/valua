<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('epics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('backlogs_frmd')->unsigned();
            $table->string('epic_name',255)->comment('Name des Epics');
            $table->string('epic_kuerzel',3)->comment('Eindeutige Abkürzung des Epics (3 Zeichen)');
            $table->double('total_story_points')->nullable();
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('epics');
    }
}
