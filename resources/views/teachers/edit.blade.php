@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Teachers Page</div>
    <div class="card-body">
        <form action="{{url('teachers/'. $teacher->id)}}" method="post">
            @csrf
            @method("patch")
            <input type="hidden" name="id" id="id" value="{{$teacher->id}}">
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name" value="{{$teacher->name}}" class="form-control"><br>
            <label for="name">Address</label><br>
            <input type="text" name="address" id="address" value="{{$teacher->address}}" class="form-control"><br>
            <label for="name">Mobile</label><br>
            <input type="text" name="mobile" id="mobile" value="{{$teacher->mobile}}" class="form-control"><br>
            <input type="submit" value="Update" class="btn btn-success"><br>
        </form>
    </div>
</div>
@endsection
