
@extends('template')


@section('content')
    <h2 id="page_name" class="fw-bold">Student</h2>
    <table id="test"></table>

    <script>
        new DataTable('#test');
    </script>
@endsection