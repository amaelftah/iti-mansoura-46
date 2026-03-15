<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;

class PostController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function show($id)
    {
        return Post::find($id);
    }

    public function store(StorePostRequest $request)
    {
        $title = $request->title;
        $description = $request->description;
        $userId = $request->user_id;

        $post = Post::create([
            'title' => $title,
            'description' => $description,
            'user_id' => $userId,
        ]);

        return $post;
    }
}
