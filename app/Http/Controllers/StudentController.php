<?php

namespace App\Http\Controllers;

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
    public function createProfile(Request $request)
    {
        $data = [
            'page'   => 'Student',
            'l_name' => session('l_name'),
            'f_name' => session('f_name'),
            'm_name' => session('m_name'),
            'suffix' => session('suffix'),
            'bday' => '',
            'religion' => '',
            'gender' => '',
            'lrn' => '',
            'level' => ''
        ];
        return view('student.add.profile', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    public function storeProfile(Request $request)
    {
        $data = [
            'l_name' => $request->input('l_name'),
            'f_name' => $request->input('f_name'),
            'm_name' => $request->input('m_name'),
            'suffix' => $request->input('suffix'),
        ];
       
        session($data);

        print_r($request->session()->all());
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
