@extends('template')
<link rel="stylesheet" href="{{ URL::asset('assets/css/student.css') }}">
@section('content')
    <h2 id="page_name" class="fw-bold">Student</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 d-none d-lg-block">
                <div class="row mt-5 mb-5 {{ ($sub_title == "Student Profile") ? '': 'text-secondary'}}">
                    <div class="col fs-4 fw-bold align-self-center">
                        Personal Profile
                    </div>
                    <div class="col-3 p-0 align-self-center">
                        <h5>
                            <i class="bi bi-circle-fill {{ ($sub_title == "Student Profile") ? 'text-primary': ''}}"></i>
                        </h5>
                    </div>
                </div>

                <div class="row mb-5 {{ ($sub_title == "Father's Profile") ? '': 'text-secondary'}}">
                    <div class="col fs-4 fw-bold align-self-center">
                        Father
                    </div>
                    <div class="col-3 p-0 align-self-center">
                        <h5>
                            <i class="bi bi-circle-fill {{ ($sub_title == "Father's Profile") ? 'text-primary': ''}}"></i>
                        </h5>
                    </div>
                </div>

                <div class="row mb-5 {{ ($sub_title == "Mother's Profile") ? '': 'text-secondary'}}">
                    <div class="col fs-4 fw-bold align-self-center">
                        Mother
                    </div>
                    <div class="col-3 p-0 align-self-center">
                        <h5>
                            <i class="bi bi-circle-fill {{ ($sub_title == "Mother's Profile") ? 'text-primary': ''}}"></i>
                        </h5>
                    </div>
                </div>

                <div class="row mb-5 {{ ($sub_title == "Guardian's Profile") ? '': 'text-secondary'}}">
                    <div class="col fs-4 fw-bold align-self-center">
                        Guardian
                    </div>
                    <div class="col-3 p-0 align-self-center">
                        <h5>
                            <i class="bi bi-circle-fill {{ ($sub_title == "Guardian's Profile") ? 'text-primary': ''}}"></i>
                        </h5>
                    </div>
                </div>

                <div class="row mb-5 {{ ($sub_title == "Sibling's Profile") ? '': 'text-secondary'}}">
                    <div class="col fs-4 fw-bold align-self-center">
                        Sibling
                    </div>
                    <div class="col-3 p-0 align-self-center">
                        <h5>
                            <i class="bi bi-circle-fill {{ ($sub_title == "Sibling's Profile") ? 'text-primary': ''}}"></i>
                        </h5>
                    </div>
                </div>

                <div class="row mb-5 {{ ($sub_title == "Complete Profile") ? '': 'text-secondary'}}">
                    <div class="col fs-4 fw-bold align-self-center">
                        Complete
                    </div>
                    <div class="col-3 p-0 align-self-center">
                        <h5>
                            <i class="bi bi-circle-fill {{ ($sub_title == "Confirmation") ? 'text-primary': ''}}"></i>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container-fluid p-4" id="add_student_profile_container">
                    <h4 class="fw-bold mb-3">{{ $sub_title }}</h4>
                    @yield('addStudentForms')
                </div>
            </div>
        </div>
    </div>
@endsection