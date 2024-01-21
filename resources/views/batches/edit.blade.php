@extends('layouts')
@section('content')

<div class="card">
  <div class="card-header">Batch Edit Page</div>
  <div class="card-body">

      <form action="{{ url('batches/' .$batches->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$batches->id}}" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$batches->name}}" class="form-control"></br>
        <label>Course</label></br>
        <input type="text" name="course_id" id="course" value="{{$batches->course_id}}" class="form-control"></br>
        <label>Start-Data</label></br>
        <input type="text" name="start_date" id="duration" value="{{$batches->start_date}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>

  </div>
</div>

@endsection
