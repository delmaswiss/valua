<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBacklogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('backlogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('projekte_frmd')->unsigned();
            $table->string('backlog_kuerzel', 2)->comment('Abkürzung des Backlogs');
            $table->string('backlog_name', 255)->comment('Name des Backlogs');
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
        Schema::dropIfExists('backlogs');
    }
}
