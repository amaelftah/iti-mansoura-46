<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        //select * from posts;
        $posts = Post::all(); //Eloquent Collection

        return view('posts.index',[
            'posts' => $posts,
        ]);
    }

    public function show($id)
    {
        //select * from posts where id = $id LIMIT 1;
        $post = Post::find($id); //App\Models\Post

        // $anotherSyntax = Post::where('id', 1)->get(); //select * from posts where id = $id; //Eloquent Collection
        // $thirdSyntax = Post::where('id', 1)->first(); //select * from posts where id = $id Limit 1;  //App\Models\Post
        // dd($anotherSyntax, $thirdSyntax);

        //select * from posts where title = 'first' and description = 'this is description';
    //    $query = Post::where('title', 'first')
    //                 ->where('description', ' this is description');
    //    dd($query);
    
        return view('posts.show',[
            'post' => $post
        ]);
    }

    public function create()
    {
        $users = User::all();

        return view('posts.create',[
            'users' => $users,
        ]);
    }

    public function store()
    {
        $title = request()->title;
        $description = request()->description;
        $userId = request()->user_id;
        
        //First Syntax
        // $post = new Post;

        // $post->title = $title;
        // $post->description = $description;
 
        // $post->save();

        //Second Syntax
        Post::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $userId,
        ]);

        return to_route('posts.index');
    }
}
