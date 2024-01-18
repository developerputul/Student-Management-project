@extends('layouts')
@section('content')

<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">

      <form action="{{ url('courses/' .$courses->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$courses->id}}" />
        <label>Trainer-name</label></br>
        <input type="text" name="trainer_name" value="{{$courses->trainer_name}}" class="form-control"></br>
        <label>Course-name</label></br>
        <input type="text" name="course_name" value="{{$courses->course_name}}" class="form-control"></br>
        <label>Duration</label></br>
        <input type="text" name="duration" id="duration" value="{{$courses->duration}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@endsection
