@extends('layouts')
@section('content')

<a href="{{ route('batches.index')}}"><button class="btn btn-secondary">Back</button></a>
<div class="card">
  <div class="card-header"> Batch View Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Course Name : {{ $batches->name }}</h5>
        <p class="card-text">  Course  : {{ $batches->course_id }}</p>
        <p class="card-text">Satrt Date : {{ $batches->start_date }}</p>
  </div>

    </hr>

  </div>
</div>
@endsection
