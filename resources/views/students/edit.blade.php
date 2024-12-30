@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Students Page</div>
    <div class="card-body">
        <form action="{{url('students/'. $student->id)}}" method="post">
            @csrf
            @method("patch")
            <input type="hidden" name="id" id="id" value="{{$student->id}}">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" value="{{$student->name}}" class="form-control"><br>
            <label for="name">Address</label><br>
            <input type="text" name="address" id="address" value="{{$student->address}}" class="form-control"><br>
            <label for="name">Mobile</label><br>
            <input type="text" name="mobile" id="mobile" value="{{$student->mobile}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection
