<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use Illuminate\Http\Request;

class LecturerController extends Controller
{
    public function edit($id)
    {
    $lecturer = Lecturer::where('id', $id)->first();
    
    //dd($lecturer); atau return response()->json($lecturer); untuk mengecek data apakah sudah betul atau tidak
    return view('admin.lecturer.edit', compact('lecturer'));
    }
    
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
        return redirect()->route('index-lecturer')->with('status', 'Sukses Tambah Data');
        //dd() //untuk mengecek data apakah ada atau tidak

    }

    public function update(Request $request, $id)
    {
        $lecturer = Lecturer::where('id', $id)->first();
        $lecturer->update($request->all());
        return redirect()->route('index-lecturer')->with('status', 'Sukses Edit Data');
    }
     
    public function delete(Request $request, $id)
    {
        $lecturer = Lecturer::where('id', $id)->first();
        $lecturer->delete();
        return redirect()->route('index-lecturer')->with('status', 'Sukses Hapus Data');
    }
   
}
