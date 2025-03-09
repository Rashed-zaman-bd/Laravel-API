<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    function PostCreate(Request $request){

        
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
        ]);
    
        $post = Post::create($request->all());
    
        return response()->json($post, 201);
    }


    function PostList(Request $request){
        
        return response()->json(Post::all());
    }


    function PostByID(Request $request, $id){

        return response()->json(Post::findOrFail($id));
    }
}


