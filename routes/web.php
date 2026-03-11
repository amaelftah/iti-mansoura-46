<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/all-posts', function () {

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

    return view('all-posts',[
        'posts' => $posts,
    ]);
});

Route::get('/single-post', function () {
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


    return view('single-post',[
        'post' => $innerPost
    ]);
});
