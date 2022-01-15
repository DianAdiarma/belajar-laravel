<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    
    public function index()
    {
        $lecturers = Lecturer::all(); //untuk select data di database 
        //return response()->json($lecturers); //untuk memastikan data di database
        return view('admin.lecturer.index', compact('lecturers'));

    }
    public function create()
    {
        return view('admin.lecturer.create');
    }

    public function store(Request $request)
    {
        Lecturer::create($request-> all());
        //dd() //untuk mengecek data apakah ada atau tidak
    }
}
