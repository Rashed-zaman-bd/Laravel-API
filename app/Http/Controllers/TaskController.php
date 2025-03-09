<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Exception;

class TaskController extends Controller
{
    function TaskCreate(Request $request){

        
        $request->validate(['title' => 'required|string|max:255']);

        $task = Task::create($request->all());

        return response()->json($task, 201);
}


function TaskList(Request $request){
        
    return response()->json(Task::where('is_completed', false)->get());
}


function TaskUpdate(Request $request, $id){

 
    $task = Task::findOrFail($id);
    $task->update(['is_completed' => $request->is_completed]);

    return response()->json($task);
    
}


}

