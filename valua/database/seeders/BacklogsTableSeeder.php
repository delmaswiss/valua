<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use DateTime;

class BacklogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('backlogs')->insert([
            'projekte_frmd' => 1,
            'backlog_name' => 'Delma',
            'backlog_kuerzel' => 'DE',
            'created_at' => new DateTime(),
        ]);

        DB::table('backlogs')->insert([
            'projekte_frmd' => 1,
            'backlog_name' => 'Natapura',
            'backlog_kuerzel' => 'NA',
            'created_at' => new DateTime(),
        ]);

        DB::table('backlogs')->insert([
            'projekte_frmd' => 1,
            'backlog_name' => 'Janepure',
            'backlog_kuerzel' => 'JA',
            'created_at' => new DateTime(),
        ]);

        // Luckylobster Projekte

        DB::table('backlogs')->insert([
            'projekte_frmd' => 2,
            'backlog_name' => 'CAPIL',
            'backlog_kuerzel' => 'CA',
            'created_at' => new DateTime(),
        ]);

    }
}
