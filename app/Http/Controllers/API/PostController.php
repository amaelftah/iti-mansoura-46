<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Http\Requests\StorePostRequest;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return PostResource::collection($posts);
    }

    public function show($id)
    {
        $post = Post::find($id);

        return new PostResource($post);
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

        return new PostResource($post);
    }
}
