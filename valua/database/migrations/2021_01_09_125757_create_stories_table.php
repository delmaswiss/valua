<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('stories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('epics_frmd')->unsigned();
            $table->text('story_wer')->comment('Agile Story WER');
            $table->text('story_was')->comment('Agile Story WAS');
            $table->text('story_warum')->comment('Agile Story WARUM');
            $table->text('definition_of_done')->comment('DoD - Definition of Done');
            $table->text('definition_of_ready')->comment('DoR - Definition of Ready')->nullable();
            $table->text('kommentar')->nullable();
            $table->double('story_points')->nullable();
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
        Schema::dropIfExists('stories');
    }
}
