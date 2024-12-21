<?php

namespace App\Http\Controllers;
use App\Models\GradeLevels;
use App\Models\StudentProfile;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.index', ['page' => 'Student']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'page'      => 'Student',
            'sub_title' => 'Student Profile',
            'levels'    => GradeLevels::get()
        ];

        return view('student.add.index', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'l_name'   => 'required',
            'f_name'   => 'required',
            'bday'     => 'required',
            'gender'   => 'required',
            'level_id' => 'required'
        ]);

        $student = [
            'l_name'   => $request->input('l_name'),
            'f_name'   => $request->input('f_name'),
            'm_name'   => $request->input('m_name'),
            'suffix'   => $request->input('suffix'),
            'bday'     => $request->input('bday'),
            'religion' => $request->input('religion'),
            'gender'   => $request->input('gender'),
            'lrn'      => $request->input('lrn'),
            'level_id' => $request->input('level_id'),
            'address'  => $request->input('address'),
            'landline' => $request->input('landline')
        ];

        StudentProfile::create($student);
        return redirect('student');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
