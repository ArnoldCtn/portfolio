<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects/{id}', function ($id) {
    $projects = [
        1 => [
            'id' => 1,
            'title' => 'Recipe App',
            'image' => asset('images/yohan.jpg'),
            'description' => 'A recipes app built with Laravel and TailwindCSS.'
        ],
        2 => [
            'id' => 2,
            'title' => 'Portfolio Site',
            'image' => asset('images/clint.jpg'),
            'description' => 'Personal portfolio showcasing projects and skills.'
        ],
        3 => [
            'id' => 3,
            'title' => 'Mobile App',
            'image' => asset('images/yohan.jpg'),
            'description' => 'A React Native mobile application demo.'
        ],
    ];

    $project = $projects[$id] ?? null;

    if (! $project) {
        abort(404);
    }

    return view('project', compact('project'));
})->name('project.show');
