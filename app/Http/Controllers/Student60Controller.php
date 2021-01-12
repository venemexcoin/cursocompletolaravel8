<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student60;

class Student60Controller extends Controller

{
    public function addStudent()

    {
        $student = new Student60();
        $student->name = "JHONATAN";
        $student->email = "JHONATAN@gmail.com";
        $student->phone = "5600678544";
        $student->save();
        return "record Inserted";
    }

    public function getSudents()
    {
        return Student60::all();
    }

    
}
