<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use Exception;

class TaskController extends Controller
{
    function TaskCreate(Request $request){

        
        $title=$request->input('title');
        
        
        Task::create([
            'title'=>$title,
           
            
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Post Successfully'
        ],200);
}


function TaskList(Request $request){
        
    return Task::get();
}


function TaskUpdate(Request $request){

 
    $id=$request->header('id');
    return Task::where('id',$id)->update([
            'is_completed'=>$request->input('is_completed'),
           
        ]);
    
}


}