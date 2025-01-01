@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Courses Page</h2>
    </div>
    <div class="card-body">
        <h5 class="card-title">Name: {{$course->name}}</h5>
        <p class="card-text">Address: {{$course->syllabus}}</p>
        <p class="card-text">Mobile: {{$course->duration}}</p>
    </div>
</div>
@endsection
