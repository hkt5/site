<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CandidateSubmission extends Model
{

    protected $table = 'candidate_submissions';
    protected $primaryKey = 'id';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'phone', 'email', 'skill', 'file', 'experience', 'salary', 'description',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [

    ];

    public function softwareDevelopmentSkill()
    {

        return $this->belongsTo('App\SoftwareDeveloperSkill');
    }

    public function softwareDevelopmentLanguage()
    {

        return $this->belongsTo('App\SoftwareDeveloperLanguage');
    }

    public function expectedSalary()
    {

        return $this->belongsTo('App\ExpectedSalary');
    }
}
