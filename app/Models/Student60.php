<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/* permite que todos los correos igresados sean en minuscula */

class Student60 extends Model
{
    use HasFactory;

    protected $table = "student60s";

    public function setEmailAttribute($value)
    {
        $this->attributes['email'] = strtolower($value);
    }

    public function getNameAttribute($value)
    {
        return strtoupper($value);
    }

    // public function getEmailAttribute($value)
    // {
    //     return strtoupper($value);
    // }
   
}
