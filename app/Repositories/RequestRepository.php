<?php


namespace App\Repositories;


use App\ExpectedSalary;
use App\SoftwareDeveloperSkill;
use App\SoftwareDevelopmentLanguage;

class RequestRepository
{

    public function getDataToForm() : array
    {

        $data = [
            'development_languages' => SoftwareDevelopmentLanguage::all(),
            'developer_skills' => SoftwareDeveloperSkill::all(),
            'expected_salaries' => ExpectedSalary::all(),
        ];
        return $data;
    }
}
