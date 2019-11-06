<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\File;

class CandidateFile extends Model
{

    protected $table = 'candidate_files';
    protected $primaryKey = 'id';

    public int $id;
    public string $name;
    public File $file;
    public string $mime;
    public string $size;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'file', 'mime', 'size',
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
