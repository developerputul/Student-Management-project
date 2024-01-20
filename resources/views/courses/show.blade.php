@extends('layouts')
@section('content')

<a href="{{ route('courses.index')}}"><button class="btn btn-secondary">Back</button></a>
<div class="card">
  <div class="card-header"> Student View Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Trainer Name : {{ $courses->trainer_name }}</h5>
        <p class="card-text">Course Name : {{ $courses->course_name }}</p>
        <p class="card-text">Duration : {{ $courses->duration }}</p>
  </div>

    </hr>

  </div>
</div>
@endsection
