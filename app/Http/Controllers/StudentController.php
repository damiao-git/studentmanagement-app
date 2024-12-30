<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Redirect;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }
    public function show($id)
    {
        $student = Student::find($id);
        return view('students.show', compact('student'));
    }
    public function create()
    {
        return view('students.create');
    }
    public function store(Request $request): RedirectResponse
    {
        Student::create($request->all());
        return redirect('students')->with('flash_message', 'Student Addedd!');
    }
    public function edit($id)
    {
        $student = Student::find($id);
        return view('students.edit', compact('student'));
    }
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->update($request->all());
        return redirect('students')->with('flash_message', 'Student Updated!');
    }
    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('students')->with('flash_message', 'Student Deleted!');
    }
}
