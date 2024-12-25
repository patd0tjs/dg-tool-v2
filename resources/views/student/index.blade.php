@extends('template')

<link rel="stylesheet" href="{{ URL::asset('css/student/index.css') }}">

@section('content')
    <h2 id="page_name" class="fw-bold">Student</h2>
      <div class="box-shadow p-5 pt-3 pb-3 bg-white rounded-4 mb-4">
        <div class="row">
          <div class="col-3 text-center fw-bold align-items-center">
            <div>
              Total Students
              <br>
              <h2 class="fw-bold m-0" id="students_enrolled">0</h2>
            </div>
          </div>
          <div class="col-4"></div>
          <div class="col text-center d-flex align-items-center">
            <a href="{{ route('student/add') }}" role="button" class="btn btn-outline-primary btn-lg rounded-pill fw-bold disabled">Batch Upload</a>
          </div>
          <div class="col text-center d-flex align-items-center">
            <a href="{{ route('student/add') }}" role="button" class="btn btn-primary btn-lg rounded-pill fw-bold">Add New Student</a>
          </div>
        </div>
      </div>
      <div class="table-responsive table-striped box-shadow p-4 bg-white rounded-4">
        <table id="student_tb">
            <thead>
                  <tr>
                      <th class="text-center">LRN</th>
                      <th class="text-center">Name</th>
                      <th class="text-center">Level</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">Action</th>
                  </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <script src="{{ URL::asset('js/student/index.js') }}"></script>
@endsection