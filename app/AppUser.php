<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AppUser extends Model
{
    protected $fillable = [
        'name',
        'age',
        'gender',
        'education_qual',
        'department'     
    ];
}
