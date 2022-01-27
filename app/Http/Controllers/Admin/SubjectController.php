<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
     public function edit($id)
     {
         $lecturers = Lecturer::all();
         $subjects = Subject::where('id', $id)->first();

     //dd($lecturer); atau return response()->json($lecturer); untuk mengecek data apakah sudah betul atau tidak
     return view('admin.subject.edit', compact('lecturers','subjects'));
     }

    public function index(Request $request)
    {
        //dd($request->get('keyword'));
        // $subjects = Subject::all();
        $subjects = Subject::with('lecturer')->get();
        $search = $request->get('keyword');
        if ($search){
            $subjects = Subject::where('code', 'LIKE', "%$search%")->get();
        }
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
    return redirect()->route('index-subject')->with('status', 'Sukses Tambah Data');
    // //dd() //untuk mengecek data apakah ada atau tidak
    }

    public function update(Request $request, $id)
    {
    $subjects = Subject::where('id', $id)->first();
    $subjects->update($request->all());
    return redirect()->route('index-subject')->with('status', 'Sukses Edit Data');
    }

    public function delete($id)
    {
    $subjects = Subject::where('id', $id)->first();
    $subjects->delete();
    return redirect()->route('index-subject')->with('status', 'Sukses Hapus Data');
    }
    
}
