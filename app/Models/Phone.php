<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Phone extends Model
{
    use HasFactory;

    protected $table = 'phones';

    public function phone()
    {
        return $this->belongsTo(User::class);
    }
}
