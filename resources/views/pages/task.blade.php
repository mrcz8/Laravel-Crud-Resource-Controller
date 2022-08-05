@extends('layout.master')
@section('title')
    Specific Task

@endsection
@section('content')
<div class="container p-3">
  <div class="card"style="width:100%; height:500px;">

<b><h5 class="card-title mt-3" style="margin-left:40px;">Event Details</b></h5>
         
              <button class=" mt-2 btn btn-primary" style="margin-right:30px; margin-left:130px;">Create</button>
              <a href="{{route('tasks.index')}}" class="btn btn-secondary">Cancel</a>
              
      </div>
</form>
  </div>
        </div>
        <b><a class="nav-link active text-primary" aria-current="true" href="#">Show Task</b></a>
      </li>
      <li class="nav-item">
        <b><a class="nav-link text-dark" href="{{route('tasks.index')}}">Back</b></a>
      </li>
    </ul>
  </div>
  <div class="card-body"><br>
    <h3>The task is to {{$task->task_column}}</h3>
    <h3>The task is to {{$task->date}}</h3>
    <h3>The task is to {{$task->incharge}}</h3>
    

    </div>
      
@endsection                
                    