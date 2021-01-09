<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjekteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('projekte', function (Blueprint $table) {
            $table->increments('id');
            $table->string('projekt_name',255)->unique()->comment('Eindeutiger Projaktname');
            $table->text('beschreibung')->nullable()->comment('Beschreibung des Projektes');
            $table->dateTime('startdatum',0)->comment('Wann wurde das Projekt gestartet');
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

        Schema::dropIfExists('projekte');
    }
}
