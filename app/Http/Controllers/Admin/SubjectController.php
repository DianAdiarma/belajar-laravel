<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        // $subjects = Subject::all();
        $subjects = Subject::with('lecturer')->get();
        // return response()->json($subjects);
        return view('admin.subject.index', compact('subjects'));
    }

    public function create(){
        $lecturers = Lecturer::all();
        return view('admin.subject.create', compact('lecturers'));
    }

    public function store(Request $request)
    {
    Subject::create($request-> all());
    // return redirect()->route('index-student')->with('status', 'Sukses Tambah Data');
    // //dd() //untuk mengecek data apakah ada atau tidak

    }
    
}
