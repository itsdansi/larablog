<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
   function getById($id)
   {
    $post = Post::find($id);
    return view('postDetails',['post'=>$post]);
   }
}
