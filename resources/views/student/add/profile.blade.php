@extends('student.add.template')

@section('addStudentForms')

    <h2>Student Profile</h2>
    <form action="{{ route('student/add/profile') }}" method="post">
        @csrf
        <div class="row mb-3 mt-3">
            <div class="col">
                <label class="">Last Name</label>
                <input type="text" class="form-control" name="l_name" value="{{ $l_name }}" required>
            </div>
            <div class="col-4">
                <label class="">First Name</label>
                <input type="text" class="form-control" name="f_name" value="{{ $f_name }}" required>
            </div>
            <div class="col">
                <label class="">Middle Name</label>
                <input type="text" class="form-control" name="m_name" value="{{ $m_name }}" required>
            </div>
            <div class="col-2">
                <label class="">Suffix</label>
                <input type="text" class="form-control" name="suffix" value="{{ $suffix }}">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-3">
                <label class="">Birthday</label>
                <input type="date" class="form-control" name="bday" value="{{ $bday }}" required>
            </div>
            <div class="col-1">
                <label class="">Age</label>
                <input type="number" class="form-control" disabled>
            </div>
            <div class="col">
                <label class="">Religion</label>
                <input type="text" class="form-control" name="m_name" value="{{ $religion }}" required>
            </div>
            <div class="col-3">
                <label class="">Gender</label>
                <select name="gender" class="form-control" required>
                    <option value="{{ $gender }}" hidden selected></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label class="">LRN</label>
                <input type="text" class="form-control" name="lrn" value="{{ $lrn }}" required>
            </div>
            <div class="col-5">
                <label class="">Grade Level</label>
                <select name="level" class="form-control" required>
                    <option value="{{ $gender }}" hidden selected></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>
        <input type="submit" value="submit">
    </form>

@endsection