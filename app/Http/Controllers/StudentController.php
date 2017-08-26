<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use Session;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $students = Student::all();
        return view('pages.view_stu')->withStudents($students);    

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.add_stu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $student = new Student;

        $student->student = $request->input('student');
        $student->father = $request->input('father');
        $student->gender = $request->input('gender');
        $student->school = $request->input('school');
        $student->roll = $request->input('roll');
        $student->classs = $request->input('classs');

        $student->save();

        Session::flash('success', 'A student has addedd successfully');
        
        return redirect()->route('students.index', $student->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::find($id);

        return view('pages.edit_stu')->withStudent($student);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        
        $student->student = $request->input('student');
        $student->father = $request->input('father');
        $student->gender = $request->input('gender');
        $student->school = $request->input('school');
        $student->roll = $request->input('roll');
        $student->classs = $request->input('classs');

        $student->save();

        Session::flash('success', 'A student has updated successfully');
        
        return redirect()->route('students.index', $student->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        $student->delete();
        Session::flash('success', 'The record has deleted successfully.');
        
        return redirect()->route('students.index');
    }
}
