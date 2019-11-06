<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpectedSalariesTableSeeder extends Seeder
{
    private array $salaries = [
        '0' => 'Less than 25 USD peer hour',
        '1' => 'Moore than 25 USD peer hour',
        '2' => 'Moore than 50 USD peer hour',
        '3' => 'Moore than 100 USD peer hour',
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach ($this->salaries as $key => $value) {

            DB::table('expected_salaries')->insert(
                [
                    'value' => $value,
                ]
            );
        }
    }
}
