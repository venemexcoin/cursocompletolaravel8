<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student57;
use App\Models\Post57;

class Test57Controller extends Controller
{
    public function addStudent()
    {
        $students = [
            ['name'=>'smith','email'=>'smith@gmail.com','phone'=>'1234567890'],
            ['name'=>'jennifer','email'=>'jennifer@gmail.com','phone'=>'0987654321']
        ];
        Student57::insert($students);
        return "Students are added";
    }

    public function addPost()
    {
        $posts = [
            ['title'=>'first post title','body'=>'first post description'],
            ['title'=>'last post title','body'=>'last post description']
        ];
        Post57::insert($posts);
        return "posts are created";
    }

    public function getStudents()
    {
        $students = Student57::all();
        return $students;
    }

    public function getPosts()
    {
        $posts = Post57::all();
        return $posts;
    }
}
