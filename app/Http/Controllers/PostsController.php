<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
   public function showPosts(){
   	  
   	  $posts = Post::all();
   	
   		  return view('posts.posts',compact('posts'));
   }
}



  