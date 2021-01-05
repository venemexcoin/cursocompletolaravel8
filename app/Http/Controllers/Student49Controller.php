<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student49;

class Student49Controller extends Controller
{
    public function index()
    {
        $students = Student49::orderBy('id','DESC')->get();
        return view('student49',compact('students'));
    }

    public function addStudent(Request $request)
    {
        $student = new Student49();
        $student->firstname = $request->firstname;
        $student->lastname = $request->lastname;
        $student->email = $request->email;
        $student->phone = $request->phone;
        $student->save();
        return response()->json($student);
    }
}
