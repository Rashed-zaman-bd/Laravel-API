<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function PostCreate(Request $request){

        
            $title=$request->input('title');
            $content=$request->input('content');
            
            Post::create([
                'title'=>$title,
                'content'=>$content,
                
            ]);
            return response()->json([
                'status' => 'success',
                'message' => 'Post Successfully'
            ],200);
    }


    function PostList(Request $request){
        
        return Post::get();
    }


    function PostByID(Request $request){

        $id = $request->input('id');
        return Post::where('id',$id)->first();
    }
}


