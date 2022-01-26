<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
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

    public function edit($id)
    {
        $student = Student::where('id', $id)->first();
        return view('admin.student.edit', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $student = Student::where('id', $id)->first();
        $student->update($request->all());
        return redirect()->route('index-student')->with('status', 'Sukses Edit Data');
    }

    public function delete($id)
    {
        $student = Student::where('id', $id)->first();
        $student->delete();
        return redirect()->route('index-student')->with('status', 'Sukses Hapus Data');
    }
}
