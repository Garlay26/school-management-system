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

    public function edit($id){
        try {
            $teacher = Teacher::find($id);
            $teacherName = $teacher->name;
            return view('edit-teacher',['edit_teacher' => $teacher]);
        } catch (\Throwable $th) {
            return redirect()->route('teacher')->with('error','Something Went Wrong');
        }
    }

    public function update(request $request){
        // dd($request);

        try {
            //code...
            $teacher = Teacher::find($request->id);
            $teacher->update([
                'name' => $request->name,
                'code' => $request->code,
                'phone' => $request->phone,
                'age' => $request->age,
                'address' => $request->address,
                'birthday' => date('Y-m-d',strtotime($request->birthday)),
                'regsiter_date' =>date('Y-m-d',strtotime($request->register_date)),
            ]);
    
            return redirect()->route('teacher');
        } catch (\Throwable $th) {
            return redirect()->route('teacher')->with('error','Something Went Wrong');
        }

    }
    
    public function delete($id){

        try {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect()->route('teacher');
        } catch (\Throwable $th) {
            return redirect()->route('teacher')->with('error','Something Went Wrong');
        }
        
    }

}
