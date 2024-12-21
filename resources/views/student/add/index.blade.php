@extends('template')
<link rel="stylesheet" href="{{ URL::asset('css/student.css') }}">
@section('content')
    <h2 id="page_name" class="fw-bold">Student</h2>
    <div class="container-fluid">
        <div class="row">
            <div class="col-3 d-none d-lg-block">
                <div class="row mt-5 mb-5">
                    <div class="col fs-4 fw-bold align-self-center" id="profile_nav_label">
                        Personal Profile
                    </div>
                    <div class="col-3 p-0 align-self-center">
                        <h5>
                            <i class="bi bi-circle-fill text-primary" id="profile_nav_circle"></i>
                        </h5>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col fs-4 fw-bold align-self-center text-secondary">
                        Father
                    </div>
                    <div class="col-3 p-0 align-self-center">
                        <h5>
                            <i class="bi bi-circle-fill"></i>
                        </h5>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col fs-4 fw-bold align-self-center text-secondary">
                        Mother
                    </div>
                    <div class="col-3 p-0 align-self-center">
                        <h5>
                            <i class="bi bi-circle-fill"></i>
                        </h5>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col fs-4 fw-bold align-self-center text-secondary">
                        Guardian
                    </div>
                    <div class="col-3 p-0 align-self-center">
                        <h5>
                            <i class="bi bi-circle-fill"></i>
                        </h5>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col fs-4 fw-bold align-self-center text-secondary">
                        Sibling
                    </div>
                    <div class="col-3 p-0 align-self-center">
                        <h5>
                            <i class="bi bi-circle-fill"></i>
                        </h5>
                    </div>
                </div>

                <div class="row mb-5">
                    <div class="col fs-4 fw-bold align-self-center text-secondary" id="confirm_nav_label">
                        Complete
                    </div>
                    <div class="col-3 p-0 align-self-center">
                        <h5>
                            <i class="bi bi-circle-fill" id="confirm_nav_circle"></i>
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="container-fluid p-4" id="add_student_profile_container">
                    

                    {{-- main form --}}
                    <form action="{{ route('student/add') }}" method="post">
                        @csrf

                        <div id="profile_form">
                            @include('student/add/profile')
                        </div>

                        <div id="confirm_form">
                            @include('student/add/confirm')
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <script src="{{ URL::asset('js/student.js') }}"></script>
@endsection