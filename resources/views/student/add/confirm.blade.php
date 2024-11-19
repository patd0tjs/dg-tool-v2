@extends('student.add.template')

@section('addStudentForms')
    <div class="row">
        <div class="col-lg-9">
            <table class="mb-4">
                <tr>
                    <th class="text-end p-1">STUDENT NAME</th>
                    <td class="p-1"><h4 class="fw-bold">{{ $f_name . ' ' . $m_name . ' ' . $l_name}}</h4></td>
                </tr>
                <tr>
                    <th class="text-end p-1">ADDRESS</th>
                    <td class="p-1">{{ $address }}</td>
                </tr>
            </table>
            <table class="w-100 mb-3">
                <tr class="summary-detail">
                    <th>GRADE LEVEL</th>
                    <td class="text-end">{{ $level->name }}</td>
                </tr>
                <tr class="summary-detail">
                    <th>LRN</th>
                    <td class="text-end">{{ $lrn }}</td>
                </tr>
                <tr class="summary-detail">
                    <th>BIRTHDAY</th>
                    <td class="text-end">{{ $bday }}</td>
                </tr>
                <tr class="summary-detail">
                    <th>AGE</th>
                    <td class="text-end">{{ 12 }}</td>
                </tr>
                <tr class="summary-detail">
                    <th>RELIGION</th>
                    <td class="text-end">{{ $religion }}</td>
                </tr>
                <tr class="summary-detail">
                    <th>LANDLINE</th>
                    <td class="text-end">{{ $landline }}</td>
                </tr>
            </table>
            <div class="row">
                <div class="col-2"><a class="btn btn-outline-primary fw-bold w-100" href="">< Back</a></div>
                <div class="col"><a class="btn btn-outline-primary fw-bold w-100" href="">Add Relative Information ></a></div>
                <div class="col-4"><a class="btn btn-primary fw-bold w-100" href="">Confirm Student ></a></div>
            </div>
        </div>
        <div class="col-lg"></div>
    </div>

@endsection