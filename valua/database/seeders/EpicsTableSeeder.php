<?php

namespace Database\Seeders;

use DateTime;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EpicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Backlog: Delma
        # ID : 1
        DB::table('epics')->insert([
            'backlogs_frmd' => 1,
            'epic_name' => 'Kosten Sparen',
            'epic_kuerzel' => 'KOS',
            'total_story_points' => null,
            'created_at' => new DateTime(),
        ]);
        # ID : 2
        DB::table('epics')->insert([
            'backlogs_frmd' => 1,
            'epic_name' => 'Gorgias Switch',
            'epic_kuerzel' => 'GOR',
            'total_story_points' => null,
            'created_at' => new DateTime(),
        ]);

        // Backlog: Natapura
        # ID : 3
        DB::table('epics')->insert([
            'backlogs_frmd' => 2,
            'epic_name' => 'Onlineshop Re-Launch',
            'epic_kuerzel' => 'ONL',
            'total_story_points' => null,
            'created_at' => new DateTime(),
        ]);
        # ID : 4
        DB::table('epics')->insert([
            'backlogs_frmd' => 2,
            'epic_name' => 'Produkte Broschüre',
            'epic_kuerzel' => 'PRO',
            'total_story_points' => null,
            'created_at' => new DateTime(),
        ]);
        # ID : 5
        DB::table('epics')->insert([
            'backlogs_frmd' => 2,
            'epic_name' => 'Optimierungen',
            'epic_kuerzel' => 'OPT',
            'total_story_points' => null,
            'created_at' => new DateTime(),
        ]);

        // Backlog: Janepure
        # ID : 6
        DB::table('epics')->insert([
            'backlogs_frmd' => 3,
            'epic_name' => 'Onlineshop',
            'epic_kuerzel' => 'ONL',
            'total_story_points' => null,
            'created_at' => new DateTime(),
        ]);
        # ID : 7
        DB::table('epics')->insert([
            'backlogs_frmd' => 3,
            'epic_name' => 'Produkte',
            'epic_kuerzel' => 'PRD',
            'total_story_points' => null,
            'created_at' => new DateTime(),
        ]);
        # ID : 8
        DB::table('epics')->insert([
            'backlogs_frmd' => 3,
            'epic_name' => 'Administration',
            'epic_kuerzel' => 'ADM',
            'total_story_points' => null,
            'created_at' => new DateTime(),
        ]);

        // Backlog: CAPIL
        # ID : 9
        DB::table('epics')->insert([
            'backlogs_frmd' => 4,
            'epic_name' => 'Onlineshop',
            'epic_kuerzel' => 'ONL',
            'total_story_points' => null,
            'created_at' => new DateTime(),
        ]);
        # ID : 10
        DB::table('epics')->insert([
            'backlogs_frmd' => 4,
            'epic_name' => 'Produkte',
            'epic_kuerzel' => 'PRO',
            'total_story_points' => null,
            'created_at' => new DateTime(),
        ]);
        # ID : 11
        DB::table('epics')->insert([
            'backlogs_frmd' => 4,
            'epic_name' => 'Administration',
            'epic_kuerzel' => 'ADM',
            'total_story_points' => null,
            'created_at' => new DateTime(),
        ]);
    }
}
