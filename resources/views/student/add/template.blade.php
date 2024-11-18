@extends('template')
<link rel="stylesheet" href="{{ URL::asset('assets/css/student.css') }}">
@section('content')
    <h1 id="page_name">Student</h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3">
                <div class="row">
                    <div class="col">Personal Profile</div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">Father</div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">Mother</div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">Guardian</div>
                    <div class="col"></div>
                </div>
                <div class="row">
                    <div class="col">Sibiling</div>
                    <div class="col"></div>
                </div>
            </div>
            <div class="col">
                <div class="container-fluid p-4" id="add_student_profile_container">
                    @yield('addStudentForms')
                </div>
            </div>
        </div>
    </div>
@endsection