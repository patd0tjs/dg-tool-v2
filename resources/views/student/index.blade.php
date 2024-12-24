@extends('template')

@section('content')
    <h2 id="page_name" class="fw-bold">Student</h2>
    <table id="student_tb">
        <thead>
            <tr>
                <th>LRN</th>
                <th>Name</th>
                <th>Level</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script>
        new DataTable('#student_tb');
    </script>
@endsection