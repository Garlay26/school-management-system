<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

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

    public function edit($id){
        try {
            $student = Student::find($id);
            $studentName = $student->name;
            return view('edit-student',['edit_student' => $student]);
        } catch (\Throwable $th) {
            return redirect()->route('student')->with('error','Something Went Wrong');
        }
    }

    public function update(request $request){
        // dd($request);
        try {
            $student = Student::find($request->id);
            $student->update([
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
        catch (\Throwable $th) {
            return redirect()->route('teacher')->with('error','Something Went Wrong');
        }
    }

       
    
    
    public function delete($id){
        $student = Student::find($id);
        $student->delete();
        return redirect()->route('student');
    }

    public function login(request $request){
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // User is authenticated, create a token with a name
            $token = Auth::user()->createToken('mobile-app-token')->accessToken;
            return response()->json(['token' => $token], 200);
        } else {
            return response()->json(['message' => 'unauthorized'], 401);
        }
    }

    public function getStudents(request $request){
        $students = Student::all();
        return response()->json(['students' => $students], 200);
    }

}
