<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{   
    public $student;
    public function addStudent(){
        return view('create');
    }
    public function store(Request $request){
        Student::saveInfo($request);
        return redirect(route('manage-student'));
    }
    public function update(Request $request){
        Student::updateInfo($request);
        return redirect(route('manage-student'));
    }
    public function manageStudent(){
        return view('manage',[
            'students'=>Student::all()
        ]);
    }
    public function edit($id){
        return  view('edit',[
           "student"=>Student::find($id)
        ]);
    }
    public function delete(Request $request){
        $this->student=Student::find($request->id);
        $this->student->delete();
        return back();
    }
}
