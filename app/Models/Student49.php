<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student49 extends Model
{
    use HasFactory;

    protected $table = 'student49s';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'phone'
    ];
}
