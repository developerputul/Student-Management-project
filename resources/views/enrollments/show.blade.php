@extends('layouts')
@section('content')

<a href="{{ route('enrollments.index')}}"><button class="btn btn-secondary">Back</button></a>
<div class="card">
  <div class="card-header"> Student View Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Enrollment Number: {{ $enrollments->enroll_no }}</h5>
        <p class="card-text">Batch : {{ $enrollments->batch_id }}</p>
        <p class="card-text">Student : {{ $enrollments->student_id }}</p>
        <p class="card-text">Join Data : {{ $enrollments->join_date }}</p>
        <p class="card-text">Fee : {{ $enrollments->fee }}</p>
  </div>

    </hr>

  </div>
</div>
@endsection
