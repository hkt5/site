<?php

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
        $this->call(SoftwareDevelopmentLanguagesSeeder::class);
        $this->call(SoftwareDevelopmentSkillsTableSeeder::class);
        $this->call(ExpectedSalariesTableSeeder::class);
    }
}
