<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;

class StudentController extends Controller
{
    public function index(){
        $students = Students::all();
        return view('students.index')->with('students', $students);
    }

    public function display($user){
        $student = Students::find($user);
        return view('students.qrcode')->with('student', $student);
    }

    public function create(){
        return view('students.create');
    }

    public function store(){
        $newstudent = new Students();
        $data = request()->all();

        $newstudent->name = $data['name'];
        $newstudent->address = $data['address'];
        $newstudent->mobile = $data['mobile'];
        $newstudent->save();

        return redirect()->route('index');
    }

    public function destroy(Students $student){
        $student->delete();
        return redirect()->route('index');
    }

    public function edit(Students $student){
        return view('students.edit')->with('student', $student);
    }

    public function update(Students $student){
        $data = request()->all();

        $student->name = $data['name'];
        $student->address = $data['address'];
        $student->mobile = $data['mobile'];
        $student->update();

        return redirect()->route('index');
    }
}
