<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::where('age','20')->orwhere('name','nyi nyi')->get();
        return view('student',['students' => $students]);
    }
}
