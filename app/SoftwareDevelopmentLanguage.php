<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoftwareDevelopmentLanguage extends Model
{

    protected $table = 'software_development_languages';
    protected $primaryKey = 'id';

    protected $id;
    protected $name;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
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

    public function candidateSubmission()
    {

        return $this->hasOne('App\CandidateSubmission');
    }
}
