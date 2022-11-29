<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;
use App\Models\User;
use App\Models\Post;
use App\Models\Comment;

class HomeController extends Controller
{
    public function index()
    {
        $phone = User::find(1); 
        $phone = User::find(1)->phone; 
        //return $phone; 
    
        $user = Phone::find(2); 
        $user = Phone::find(2)->user; 
       // return $user;
    
       //$users = User::all();
      
        return view('website.home.index', [
           // 'users' => User::all(),
           'phones' => Phone::all(),
        ]);
    }


    public function oneToMany()
    {
        $comments = Post::find(1)->comments;
       // return $comments;

       // $posts = Comment::find(3)->post;
        // return $posts;

        $posts = Post::with('comments')->get();
        // $comments = Comment::with('p')->get();
        return view('website.home.oneTomany', compact('posts'));
    }
}
