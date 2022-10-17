@extends('layouts.app')

@section('title','products')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">

            @if (session('status'))
                <h6 class="alert alert-success">{{ session('status') }}</h6>
            @endif

            <div class="card">
                <div class="card-header">
                    <h4>Edit & Update Student
                        <a href="{{ url('student') }}" class="btn btn-danger float-end">BACK</a>
                    </h4>
                </div>
                <div class="card-body">

                    <form action="{{ url('update-student/'.$student->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="form-group mb-3">
                            <label for="">Student Name</label>
                            <input type="text" name="fullname" value="{{$student->fullname}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student birthday</label>
                            <input type="date" name="birthday" value="{{$student->birthday}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Student address</label>
                            <input type="address" name="address" value="{{$student->address}}" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update Student</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection