@extends('layout.master')
@section('title')
To do list

@endsection
@section('content')

<div class="container p-2">
<div class="card">
    <div class="card-header">Modified CRUD Demo</div>
    <b><h5 class="card-title pt-3" style="margin-left:40px;">Events Management System</b></h5><br><br>

    <a href="{{route('tasks.create')}}"><span class="glyphicon glyphicon-plus-sign text-primary"  style="margin-left:40px;"></span></a><br>
    @foreach ($tasks as $task)
  <div class="row row-cols-1 row-cols-md-3 g-4 {{$task->id}}" style="width:90%; margin-left:35px;">
  <div class="col ">
    <div class="card">
      <div class="card-body" style="background-color: #6495ED;">

        <form action="{{route('tasks.destroy', $task->id)}}" method="post">
        @csrf
        {{method_field('delete')}}

        <button class="glyphicon glyphicon-remove-sign text-danger" style="border: none; background-color: inherit; text-decoration: none; margin-left:100px;" onclick="return confirm(' Are you sure you want to delete?')"  style="margin-left:100px;">
      </button>
      </form>


        <br>
        <h5 class="card-title text-center"> 
            {{$task->task_column}}
        </h5><br><br>
        <div class="text-center">
          <a href="{{route('tasks.show', $task->id)}}" class="btn btn-primary">View</a>
          <a href="{{route('tasks.edit', $task->id)}}" class="btn btn-secondary">Edit</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endforeach
 <br><br>
</div>


@endsection                

