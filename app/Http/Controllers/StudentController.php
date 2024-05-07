<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use Illuminate\Http\Request;
use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Support\facades\Validator;
use Illuminate\Support\Facades\Storage;



class StudentController extends Controller
{
    public function index(){
        $s['students'] = Student::all();
        return view('student.index',$s);
    }
    public function create(){
        return view('student.create');
    }
    public function store(Request $req){
        $insert = new Student();

        if($req->hasFile('image')){
            $image = $req->file('image');
            $path = $image->store("students/$insert->id", 'public');
            $insert->image = $path;
        }
        
        $insert->name = $req->name;
        $insert->role = $req->roll;
        $insert->registration = $req->reg;
        $insert->email = $req->email;
        // $insert->image = $req->image;
        $insert->save();
        return redirect()->route('student.index');
    }
    public function edit($id){
        $s['student'] = Student::findOrFail($id);
        return view('student.edit',$s);
    }
    // public function update(Request $req, $id){
    //     $student = Student::findOrFail($id); 

    //     if($req->hasFile('image')){
    //         $image = $req->file('image');
    //         $path = $image->store("students", 'public');
    //         Storage::delete('public/' . $req->image);
    //         $student->image = $path;
    //     }
        

    //     $student->name = $req->name;
    //     $student->role = $req->roll;
    //     $student->registration = $req->reg;
    //     $student->email = $req->email;
    //     $student->image = $req->image;
    //     $student->updated_at = Carbon::now();
    //     $student->update();
    //     return redirect()->route('student.index');
    // }





    public function update(Request $req, $id){
        $student = Student::findOrFail($id); 
    
        if($req->hasFile('image')){
            $image = $req->file('image');
            $path = $image->store("students", 'public');
            // Delete old image if exists
            Storage::delete('public/' . $student->image);
            $student->image = $path; // Assign new image path
        }
    
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

    public function show($id){
        $student = Student::find($id);
        return view('student.show')->with('students', $student);
    }
        
   
}
