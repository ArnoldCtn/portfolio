<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MessageController;

Route::get('/', function () {
    $projects = [
        1 => [
            'id' => 1,
            'title' => 'Url Shortener',
            'image' => asset('images/url-shortener.png'),
            'description' => 'Url shortener flask application',
            'stack' => 'Python , Flask',
            'platform' => 'Responsive web application',
            'category' => 'web',
            'url' => 'https://url-shortener-y2fi.vercel.app/',
            'github' => 'https://github.com/ArnoldCtn/url-shortener.git',
        ],
        2 => [
            'id' => 2,
            'title' => 'React Native Crud application',
            'image' => asset('images/iPhone-13-PRO-localhost (1).png'),
            'stack' => 'React Native',
            'platform' => 'Mobile application',
            'category' => 'mobile',
            'github' => 'https://github.com/ArnoldCtn/React-native-crud',
            'description' => 'Simple crud project',
        ],
        3 => [
            'id' => 3,
            'title' => 'Todo Tkinter',
            'image' => asset('images/tkinter_todo.jpg'),
            'description' => 'Simple todo app built with python and tkinter',
            'stack' => 'Python , Tkinter',
            'platform' => 'Desktop application',
            'category' => 'desktop',
            'github' => 'https://github.com/ArnoldCtn/todo-python',
        ],
        4 => [
            'id' => 4,
                                'title' => 'Weather App',
                                'image' => asset('images/weatherappImg.jpg'),
                                'description' => 'Weather laravel web app using weatherapi.com api',
                                'stack' => 'Laravel, TailwindCSS',
                                'platform' => 'Web application',
                                'category' => 'web',
                                'github' => 'https://github.com/ArnoldCtn/weather-laravel-app.git',
        ],
        5 => [
            'id' => 5,
            'title' => 'Chat Application',
            'image' => asset('images/chat-app.jpg'),
            'description' => 'Real-time chat application with user authentication.',
            'stack' => 'Node.js, Express, Socket.io, React',
            'platform' => 'Web application',
            'category' => 'web',
            'url' => 'https://example.com/chat-app',
            'github' => 'https://github.com/ArnoldCtn/chat-app',
        ],
        6 => [
            'id' => 6,
            'title' => 'Fitness Tracker',
            'image' => asset('images/fitness-tracker.jpg'),
            'description' => 'Mobile application for tracking fitness activities and progress.',
            'stack' => 'React Native, Firebase',
            'platform' => 'Mobile application',
            'category' => 'mobile',
            'github' => 'https://github.com/ArnoldCtn/fitness-tracker',
        ],
        7 => [
            'id' => 7,
            'title' => 'Task Management CLI',
            'image' => asset('images/cli-todo.jpg'),
            'description' => 'Command-line interface for managing tasks.',
            'stack' => 'Python, Argparse',
            'platform' => 'Desktop application',
            'category' => 'desktop',
            'github' => 'https://github.com/ArnoldCtn/cli-task-manager',
        ],
    ];
    return view('welcome', compact('projects'));
});



Route::post('/home', [ContactController::class, 'submit'])->name('contact.submit');


//display messages
Route::get('/messages', [MessageController::class, 'index'])->name('messages.show');



Route::get('/projects/{id}', function ($id) {
    $projects = [
        1 => [
            'id' => 1,
            'title' => 'Url Shortener',
            'image' => asset('images/url-shortener.png'),
            'description' => 'Url shortener flask application',
            'stack' => 'Python , Flask',
            'platform' => 'Responsive web application',
            'url' => 'https://url-shortener-y2fi.vercel.app/',
            'github' => 'https://github.com/ArnoldCtn/url-shortener.git',
        ],
        2 => [
        'id' => 2,
        'title' => 'React Native Crud application',
        'image' => asset('images/iPhone-13-PRO-localhost (1).png'),
        'stack' => 'React Native',
        'platform' => 'Mobile application',
        'github' => 'https://github.com/ArnoldCtn/React-native-crud',
        'description' => 'Simple crud project',

        ],
        3 => [
            'id' => 3,
            'title' => 'Todo Tkinter',
            'image' => asset('images/tkinter_todo.jpg'),
            'description' => 'Simple todo app built with python and tkinter',
            'stack' => 'Python , Tkinter',
            'platform' => 'Desktop application',
            'category' => 'desktop',
            'github' => 'https://github.com/ArnoldCtn/todo-python',
        ],
        4 => [
            'id' => 4,
            'title' => 'Weather App',
            'image' => asset('images/weatherappImg.jpg'),
            'description' => 'Weather laravel web app using weatherapi.com api',
            'stack' => 'Laravel, TailwindCSS',
            'platform' => 'Web application',
            'category' => 'web',
            'github' => 'https://github.com/ArnoldCtn/weather-laravel-app.git',
        ],
        5 => [
            'id' => 5,
              'title' => 'Country Explorer',
              'image' => asset('images/cmr.png'),
                'description' => 'Explore countries and their details.',
                'stack' => 'Laravel, TailwindCSS',
               'platform' => 'Web application',
                'category' => 'web',
                 'github' => 'https://github.com/ArnoldCtn/countryExplorer.git',
        ],
        6 => [
            'id' => 6,
            'title' => 'Fitness Tracker',
            'image' => asset('images/fitness-tracker.jpg'),
            'description' => 'Mobile application for tracking fitness activities and progress.',
            'stack' => 'React Native, Firebase',
            'platform' => 'Mobile application',
            'category' => 'mobile',
            'github' => 'https://github.com/ArnoldCtn/fitness-tracker',
        ],
        7 => [
            'id' => 7,
            'title' => 'Task Management CLI',
            'image' => asset('images/cli-todo.jpg'),
            'description' => 'Command-line interface for managing tasks.',
            'stack' => 'Python, Argparse',
            'platform' => 'Desktop application',
            'category' => 'desktop',
            'github' => 'https://github.com/ArnoldCtn/cli-task-manager',
        ],
    ];

    $project = $projects[$id] ?? null;

    if (! $project) {
        abort(404);
    }

    return view('project', compact('project'));
})->name('project.show');

Route::get('/projects', function () {
    $projects = [
        1 => [
            'id' => 1,
            'title' => 'Url Shortener',
            'image' => asset('images/url-shortener.png'),
            'description' => 'Url shortener flask application',
            'stack' => 'Python , Flask',
            'platform' => 'Responsive web application',
            'category' => 'web',
            'url' => 'https://url-shortener-y2fi.vercel.app/',
            'github' => 'https://github.com/ArnoldCtn/url-shortener.git',
        ],
        2 => [
            'id' => 2,
            'title' => 'React Native Crud application',
            'image' => asset('images/iPhone-13-PRO-localhost (1).png'),
            'stack' => 'React Native',
            'platform' => 'Mobile application',
            'category' => 'mobile',
            'github' => 'https://github.com/ArnoldCtn/React-native-crud',
            'description' => 'Simple crud project',
        ],
        3 => [
            'id' => 3,
            'title' => 'Todo Tkinter',
            'image' => asset('images/tkinter_todo.jpg'),
            'description' => 'Simple todo app built with python and tkinter',
            'stack' => 'Python , Tkinter',
            'platform' => 'Desktop application',
            'category' => 'desktop',
            'github' => 'https://github.com/ArnoldCtn/todo-python',
        ],
        4 => [
            'id' => 4,
            'title' => 'E-commerce Website',
            'image' => asset('images/ecommerce.jpg'),
            'description' => 'Full-featured e-commerce platform with payment integration.',
            'stack' => 'Laravel, Vue.js, TailwindCSS',
            'platform' => 'Web application',
            'category' => 'web',
            'url' => 'https://example.com/ecommerce',
            'github' => 'https://github.com/ArnoldCtn/ecommerce-platform',
        ],
        5 => [
            'id' => 5,
            'title' => 'Chat Application',
            'image' => asset('images/chat-app.jpg'),
            'description' => 'Real-time chat application with user authentication.',
            'stack' => 'Node.js, Express, Socket.io, React',
            'platform' => 'Web application',
            'category' => 'web',
            'url' => 'https://example.com/chat-app',
            'github' => 'https://github.com/ArnoldCtn/chat-app',
        ],
        6 => [
            'id' => 6,
            'title' => 'Fitness Tracker',
            'image' => asset('images/fitness-tracker.jpg'),
            'description' => 'Mobile application for tracking fitness activities and progress.',
            'stack' => 'React Native, Firebase',
            'platform' => 'Mobile application',
            'category' => 'mobile',
            'github' => 'https://github.com/ArnoldCtn/fitness-tracker',
        ],
        7 => [
            'id' => 7,
            'title' => 'Task Management CLI',
            'image' => asset('images/cli-todo.jpg'),
            'description' => 'Command-line interface for managing tasks.',
            'stack' => 'Python, Argparse',
            'platform' => 'Desktop application',
            'category' => 'desktop',
            'github' => 'https://github.com/ArnoldCtn/cli-task-manager',
        ],
    ];

    $categorizedProjects = [
        'web' => collect($projects)->where('category', 'web')->values(),
        'mobile' => collect($projects)->where('category', 'mobile')->values(),
        'desktop' => collect($projects)->where('category', 'desktop')->values(),
    ];

    return view('all-projects', compact('categorizedProjects'));
})->name('projects.all');
