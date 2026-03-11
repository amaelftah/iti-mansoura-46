<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            [
                'title' => 'first post',
                'description' => 'some description',
                'created_at' => '2026-03-11 10:00:00',
                'creator' => [
                    'name' => 'Ahmed',
                    'email' => 'ahmed@gmail.com',
                    'created_at' => '2024-09-01 08:00:00'
                ]
            ],
            [
                'title' => 'second post',
                'description' => 'some description 2',
                'created_at' => '2026-03-11 10:00:00',
                'creator' => [
                    'name' => 'Mohamed',
                    'email' => 'mohamed@gmail.com',
                    'created_at' => '2024-09-01 08:00:00'
                ]
                ],
                [
                    'title' => 'third post',
                    'description' => 'some description 2',
                    'created_at' => '2026-03-11 10:00:00',
                    'creator' => [
                        'name' => 'Ali',
                        'email' => 'Ali@gmail.com',
                        'created_at' => '2024-09-01 08:00:00'
                    ]
                ]
        ];
    
        return view('posts.index',[
            'posts' => $posts,
        ]);
    }

    public function show()
    {
        $innerPost = [
            'title' => 'first post',
            'description' => 'some description',
            'created_at' => '2026-03-11 10:00:00',
            'creator' => [
                'name' => 'Ahmed',
                'email' => 'ahmed@gmail.com',
                'created_at' => '2024-09-01 08:00:00'
            ]
        ];
    
    
        return view('posts.show',[
            'post' => $innerPost
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        return 'we are in store action';
    }
}
