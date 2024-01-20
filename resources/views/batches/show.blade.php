@extends('layouts')
@section('content')

<a href="{{ route('batches.index')}}"><button class="btn btn-secondary">Back</button></a>
<div class="card">
  <div class="card-header"> Student View Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Trainer Name : {{ $batches->trainer_name }}</h5>
        <p class="card-text">Course Name : {{ $batches->course_id }}</p>
        <p class="card-text">Duration : {{ $batches->start_date }}</p>
  </div>

    </hr>

  </div>
</div>
@endsection
