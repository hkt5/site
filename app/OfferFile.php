<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferFile extends Model
{

    protected $table = 'offer_files';
    protected $primaryKey = 'id';

    protected int $id;
    protected string $name;
    protected $file;
    protected string $mime;
    protected string $size;

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
}
