<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'second_name',
        'first_name',
        'third_name',
        'email',
    ];
}
