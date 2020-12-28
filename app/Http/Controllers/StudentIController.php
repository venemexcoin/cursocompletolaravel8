<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentI;

class StudentIController extends Controller
{
    public function addStudent()
    {
        return view('add-student');
    }

    public function storeStudent(Request $request)
    {
        $name = $request->name;
        $image = $request->file('file');
        $imageName = time(). '.' .$image->extension();
        $image->move(public_path('images'),$imageName);

        $student = new StudentI();
        $student->name = $name;
        $student->profileimage = $imageName;
        $student->save();
        return back()->with('student_added', 'Student record has been inserted');
    }

    public function students()
    {
        $students = studentI::all();
        return view('all-students', compact('students'));
    }

    public function editStudent($id)
    {
        $student = StudentI::find($id);
        return view('edit-stadint',compact('student'));
    }

    public function updateStudent(Request $request) {
        $name = $request->name;
        $image = $request->file('file');
        $imageName = time(). '.' .$image->extension();
        $image->move(public_path('images'),$imageName);

        $student = StudentI::find($request->id);
        $student->name = $name;
        $student->profileimage = $imageName;
        $student->save();
        return back()->with('student_upsated','Student updated successfully!');
    }

    public function deleteStudent($id)
    {
        $student = StudentI::find($id);
        unlink(public_path('images')."/".$student->profileimage);
        $student->delete();
        return back()->with('student_deleted','Student deleted successfully!');
    }
}
