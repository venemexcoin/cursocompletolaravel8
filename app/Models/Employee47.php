<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee47 extends Model
{
    use HasFactory;

    protected $table = 'employee47s';

    protected $fillable = [
        "name",
        "email",
        "phone",
        "salary",
        "department"
    ];
}
