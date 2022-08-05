@extends('layout.master')
@section('title')
Update task

@endsection
@section('content')
<div class="container p-3">
  <div class="card"style="width:100%; height:500px;">

  <form action="{{route('tasks.update', $task->id)}}" method="post">
        @csrf
        {{@method_field('put')}}

<b><h5 class="card-title mt-3" style="margin-left:40px;">Update Event</b></h5>
          <div class="card-body pt-5" style="background-color: #c0c0c0; width:50%; height:230px; margin-left:150px;">
          <label for="inputname" class="col-sm-4 col-form-label" style="margin-left:20px;" >Event Name</label>
              <input type="name" class=" col-sm-6" name="event_input" value="{{$task->task_column}}">

<!--           <label for="inputname" class="col-sm-4 col-form-label" name="venue_input" style="margin-left:20px;">Venue</label>
              <input type="name" class=" col-sm-6" id="inputEmail3"> -->
          
            <br><br><br>
          <label for="example-date-input" class="col-sm-4 col-form-label" style="margin-left:20px;">Date</label>
          <input class="col-sm-6" type="date" name="date_input" value="{{$task->date}}">

        <br><br><br>
          <label for="inputEmail3" class="col-sm-4 col-form-label" style="margin-left:20px;">In charge</label>
              <input type="in charge" class="col-sm-6" id="inputEmail3" name="incharge_input" value="{{$task->incharge}}">
          <br><br>  
          
            <button class=" mt-2 btn btn-primary" style="margin-right:30px; margin-left:130px;">Update</button>
            <a href="{{route('tasks.index', $task->id)}}" class="btn btn-secondary">Cancel</a>
       
              
      </div>
</form>
  </div>
        </div>
  
  @endsection                

 
  


  