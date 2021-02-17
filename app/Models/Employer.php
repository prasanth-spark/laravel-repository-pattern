<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{

    protected $table = 'employers';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description'
    ];


}