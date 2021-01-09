<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use DateTime;

class ProjekteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projekte')->insert([
            'projekt_name' => 'Delma',
            'Beschreibung' => 'Alle Projekte welche Delma gehören',
            'startdatum' => new DateTime(),
            'created_at' => new DateTime(),
        ]);

        DB::table('projekte')->insert([
            'projekt_name' => 'Luckylobster',
            'Beschreibung' => 'Alle Projekte welche Luckylobster gehören',
            'startdatum' => new DateTime(),
            'created_at' => new DateTime(),
        ]);
    }
}
