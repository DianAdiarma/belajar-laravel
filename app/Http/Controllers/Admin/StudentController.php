<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        
        //return response()->json($students);

        return view('admin.student.index', compact('students'));
    }
    public function create()
    {
        return view('admin.student.create');
    }

    public function store(Request $request)
    {
       // dd($request->input('nim'));
        Student::create($request->all());
         return redirect()->route('index-student')->with('status', 'Sukses Insert Data');
    }
}
