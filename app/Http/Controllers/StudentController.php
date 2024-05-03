<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\Models\Student;
use Carbon\Carbon;




class StudentController extends Controller
{
    public function index(){
        $s['students'] = Student::all();
        return view('student.index',$s);
    }
    public function create(){
        return view('student.create');
    }
    public function store(StudentRequest $req){
        $insert = new Student();
        $insert->name = $req->name;
        $insert->role = $req->roll;
        $insert->registration = $req->reg;
        $insert->email = $req->email;
        $insert->save();
        return redirect()->route('student.index');
    }
    public function edit($id){
        $s['student'] = Student::findOrFail($id);
        return view('student.edit',$s);
    }
    public function update(Request $req, $id){
        $student = Student::findOrFail($id); 
        $student->name = $req->name;
        $student->role = $req->roll;
        $student->registration = $req->reg;
        $student->email = $req->email;
        $student->updated_at = Carbon::now();
        $student->update();
        return redirect()->route('student.index');
    }
    public function delete($id){
        $student = Student::findOrFail($id);
        $student->delete();
        return redirect()->route('student.index');
    }
        
   
}
