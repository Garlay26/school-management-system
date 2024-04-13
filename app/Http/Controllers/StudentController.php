<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        $students = Student::all();
        $profit = Student::calculateProfit(100);
        // return response()->json($students, 200);
        return view('student',['students' => $students]);
    }

    public function create(){
        return view('new-student');
    }

    public function store(request $request){
        // dd($request);
        $student = Student::create([
            'name' => $request->name,
            'code' => $request->code,
            'phone' => $request->phone,
            'age' => $request->age,
            'address' => $request->address,
            'birthday' => date('Y-m-d',strtotime($request->birthday)),
            'regsiter_date' =>date('Y-m-d',strtotime($request->register_date)),
        ]);

        return redirect()->route('student');
    }
}
