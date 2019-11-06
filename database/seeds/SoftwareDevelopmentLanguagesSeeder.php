<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoftwareDevelopmentLanguagesSeeder extends Seeder
{
    private array $languages_array = [
        '0' => 'JavaScript',
        '1' => 'TypeScript',
        '2' => 'Python',
        '3' => 'Java',
        '4' => 'Scala',
        '5' => 'C/Cpp',
        '6' => 'Swift',
        '7' => 'C#',
        '8' => 'Ruby',
        '9' => 'Objective-C',
        '10' => 'Kotlin',
        '11' => 'SQL',
        '12' => 'Go',
        '13' => 'Flutter',
        '14' => 'Cybersecurity',
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->languages_array as $key => $value){

            DB::table('software_development_languages')->insert(
                [
                    'name' => $value,
                ]
            );
        }
    }
}
