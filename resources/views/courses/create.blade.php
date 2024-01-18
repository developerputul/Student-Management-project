@extends('layouts')
@section('content')

    <div class="card">
    <div class="card-header">Course Create Page</div>
    <div class="card-body">

        <form action="{{ url('courses') }}" method="post">
            {!! csrf_field() !!}
            <label>Trainer Name</label></br>
            <input type="text" name="trainer_name" class="form-control"></br>
            <label>Course Name</label></br>
            <input type="text" name="course_name" class="form-control"></br>
            <label>Duration</label></br>
            <input type="text" name="duration" id="duration" class="form-control"></br>
            <input type="submit" value="Save" class="btn btn-success"></br>
        </form>

    </div>
    </div>

@endsection
