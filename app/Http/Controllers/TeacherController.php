<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index(){
        $teachers = Teacher::all();
        return view('teacher',['teachers' => $teachers]);
    }
    public function create(){
        return view('new-teacher');
    }

    public function store(request $request){
        $teacher = Teacher::create([
            'name' => $request->name,
            'code' => $request->code,
            'phone' => $request->phone,
            'age' => $request->age,
            'address' => $request->address,
            'birthday' => date('Y-m-d',strtotime($request->birthday)),
            'regsiter_date' =>date('Y-m-d',strtotime($request->register_date)),
        ]);

        return redirect()->route('teacher');
    }

}
