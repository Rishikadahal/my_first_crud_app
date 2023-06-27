@extends('students.layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
                <h2>Student List</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="/create-student">Create New Student</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Course</th>
            <th>Fee</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($students as $student)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $student->studname }}</td>
            <td>{{ $student->course }}</td>
            <td>{{ $student->fee }}</td>
            <td>
                <a class="btn btn-info" href="/show-student/{{$student->id}}">Show</a>
                <a class="btn btn-primary" href="/edit-student/{{$student->id}}">Edit</a>
                <a href="/delete-student/{{$student->id}}" type="submit" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection