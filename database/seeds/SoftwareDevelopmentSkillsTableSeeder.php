<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoftwareDevelopmentSkillsTableSeeder extends Seeder
{

    private array $skills = [
        '0' => 'Junior',
        '1' => 'Regular',
        '3' => 'Senior',
        '4' => 'Fullstack (I know 3 development languages)',
        '5' => 'Ubber (I\'m a senior with 3 or more development languages)',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach ($this->skills as $key => $value){

            DB::table('software_developer_skills')->insert(
                [
                    'name' => $value,
                ]
            );
        }
    }
}
