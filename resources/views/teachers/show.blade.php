@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Teachers Page</h2>
    </div>
    <div class="card-body">
        <h5 class="card-title">Name: {{$teacher->name}}</h5>
        <p class="card-text">Address: {{$teacher->address}}</p>
        <p class="card-text">Mobile: {{$teacher->mobile}}</p>
    </div>
</div>
@endsection
