<!-- edit.blade.php -->

@extends('students.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pull-left">
                    <h2>Edit Student</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="/">Back to Student List</a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/update-student/{{$student->id}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Student Name:</strong>
                        <input type="text" name="studname" value="{{ $student->studname }}" class="form-control" placeholder="Enter Student Name">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Course:</strong>
                        <input type="text" name="course" value="{{ $student->course }}" class="form-control" placeholder="Enter Course">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <strong>Fee:</strong>
                        <input type="number" name="fee" value="{{ $student->fee }}" class="form-control" placeholder="Enter Fee">
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
