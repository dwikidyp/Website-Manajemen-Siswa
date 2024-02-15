@extends('layout')
@section('content')
 
 
<div class="card">
    <div class="card-header">Enrollment Page</div>
    <div class="card-body">
    
    
            <div class="card-body">
            <h5 class="card-title">Enrollment Number : {{ $enrolments->enroll_no }}</h5>
            <p class="card-text">Batch : {{ $enrolments->batch_id }}</p>
            <p class="card-text">Student : {{ $enrolments->student_id }}</p>
            <p class="card-text">Join Date : {{ $enrolments->join_date }}</p>
            <p class="card-text">Fee : {{ $enrolments->fee }}</p>
    </div>
        
        </hr>
    
    </div>
</div>
@endsection