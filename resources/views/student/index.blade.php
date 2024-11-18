
@extends('template')


@section('content')
    <h1 id="page_name">Student</h1>
    <table id="test"></table>

    <script>
        new DataTable('#test');
    </script>
@endsection