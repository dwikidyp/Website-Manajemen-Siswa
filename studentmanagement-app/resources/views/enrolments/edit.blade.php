@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Enrollment Page</div>
  <div class="card-body">
      
      <form action="{{ url('enrolments/' .$enrolments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$enrolments->id}}" id="id" />
        <label>Enroll No</label></br>
        <input type="text" name="enroll_no" id="enroll_no" value="{{$enrolments->enroll_no}}" class="form-control"></br>
        <label>Batch</label></br>
        <input type="text" name="batch_id" id="batch_id" value="{{$enrolments->batch_id}}" class="form-control"></br>
        <label>Student</label></br>
        <input type="text" name="student_id" id="student_id" value="{{$enrolments->student_id}}" class="form-control"></br>
        <label>Join Date</label></br>
        <input type="text" name="join_date" id="join_date" value="{{$enrolments->join_date}}" class="form-control"></br>
        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" value="{{$enrolments->fee}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
   
  </div>
</div>
 
@stop