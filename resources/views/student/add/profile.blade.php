@extends('student.add.template')

@section('addStudentForms')
    <form action="{{ route('student/add/profile') }}" method="post">
        @csrf
        <div class="row mb-3">
            <div class="col-lg">
                <label class="">Last Name</label>
                <input type="text" class="form-control" name="l_name" value="{{ $l_name }}" required>
            </div>
            <div class="col-lg-4">
                <label class="">First Name</label>
                <input type="text" class="form-control" name="f_name" value="{{ $f_name }}" required>
            </div>
            <div class="col-lg">
                <label class="">Middle Name</label>
                <input type="text" class="form-control" name="m_name" value="{{ $m_name }}" required>
            </div>
            <div class="col-lg-2">
                <label class="">Suffix</label>
                <input type="text" class="form-control" name="suffix" value="{{ $suffix }}">
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg-3">
                <label class="">Birthday</label>
                <input type="date" class="form-control" name="bday" value="{{ $bday }}" required>
            </div>
            <div class="col-lg-1">
                <label class="">Age</label>
                <input type="number" class="form-control" disabled>
            </div>
            <div class="col-lg">
                <label class="">Religion</label>
                <input type="text" class="form-control" name="religion" value="{{ $religion }}" required>
            </div>
            <div class="col-lg-3">
                <label class="">Gender</label>
                <select name="gender" class="form-control" required>
                    <option value="{{ $gender }}" hidden selected>{{ $gender }}</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-lg">
                <label class="">LRN</label>
                <input type="text" class="form-control" name="lrn" value="{{ $lrn }}" required>
            </div>
            <div class="col-lg-5">
                <label class="">Grade Level</label>
                <select name="level" class="form-control" required>
                    @foreach ($levels as $level)
                        <option value="{{ $level->id }}" {{ $level->id == session('level') ? 'selected' : '' }}>{{ $level->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-lg">
                <label class="">Address</label>
                <input type="text" class="form-control" name="address" value="{{ $address }}" required>
            </div>
            <div class="col-lg">
                <label class="">Landline</label>
                <input type="text" class="form-control" name="landline" value="{{ $landline }}" required>
            </div>
        </div>
        <div class="d-flex flex-row-reverse">
            <input class="btn btn-primary fw-bold m-1" type="submit" value="Next >">
            <a class="btn btn-outline-primary fw-bold m-1" href="{{ route('student') }}" role="button">< Back</a>
        </div>
    </form>

@endsection