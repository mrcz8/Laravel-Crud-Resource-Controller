<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
   
    public function index()
    {
        $tasks = Task::all();
        return view("pages.home")->with("tasks", $tasks);
    }

    
    public function create()
    {
        return view("pages.add");
    
    }

 
    public function store(Request $request)
    {
        $task = new Task();
        
        $task->task_column = $request->event_input;
        $task->date = $request->date_input;
        $task->incharge = $request->incharge_input;

        $task->save();

        return redirect()->route('tasks.index');
    }

   
    public function show($id)
    {
        $task = Task::find($id);
        return view("pages.task")->with("task", $task);
    }

    
    public function edit($id)
    {
        $task = Task::find($id);
        return view("pages.edit")->with("task", $task);
    }

    
    public function update(Request $request, $id)
    {
        $task = Task::find($id);
        $task->task_column = $request->event_input;
        $task->date = $request->date_input;
        $task->incharge = $request->incharge_input;
        $task->save();
        return redirect()->route('tasks.index');
    }

    public function done($id){
            $task = Task::find($id);
            if($task->done == false){
                $task->done=1;
            }
            elseif($task->done == true){
                $task->done=0;
            }
            $task->save();
            return redirect()->route('tasks.index');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
