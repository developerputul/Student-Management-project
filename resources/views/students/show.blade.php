@extends('layouts')
@section('content')

<a href="{{ route('students.index')}}"><button class="btn btn-secondary">Back</button></a>
<div class="card">
  <div class="card-header"> Student View Page</div>
  <div class="card-body">


        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">Address : {{ $students->address }}</p>
        <p class="card-text">Mobile : {{ $students->mobile }}</p>
  </div>

    </hr>

  </div>
</div>
@endsection
