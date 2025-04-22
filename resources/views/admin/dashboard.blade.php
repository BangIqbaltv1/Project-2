@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Admin Dashboard</h1>

    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Kelola Courses</h5>
                    <a href="{{ route('admin.courses.index') }}" class="btn btn-light">Lihat</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Kelola Quiz</h5>
                    <a href="{{ route('admin.quiz.index') }}" class="btn btn-light">Lihat</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
