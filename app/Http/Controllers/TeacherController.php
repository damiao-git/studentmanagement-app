<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        return view('teachers.index', compact('teachers'));
    }
    public function show($id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.show', compact('teacher'));
    }
    public function create()
    {
        return view('teachers.create');
    }
    public function store(Request $request)
    {
        Teacher::create($request->all());
        return redirect('teachers')->with('flash_message', 'Teacher Addedd!');
    }
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.edit', compact('teacher'));
    }
    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $teacher->update($request->all());
        return redirect('teachers')->with('flash_message', 'Teacher Updated!');
    }
    public function destroy($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();
        return redirect('teachers')->with('flash_message', 'Teacher Deleted!');
    }
}
