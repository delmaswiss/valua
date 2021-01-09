<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProjekteTableSeeder::class);
        $this->call(BacklogsTableSeeder::class);
        $this->call(EpicsTableSeeder::class);
        $this->call(StoriesTableSeeder::class);
    }
}
