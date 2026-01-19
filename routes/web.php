<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {

     $samples = [
        1 => ["id" => 1, "name" => "Alice", "course" => "BSCS", "email" => "alice@gmail.cm", "year" => 2],
        2 => ["id" => 2, "name" => "Mewtwo", "course" => "BSIT", "email" => "mewtwo@gmail.com", "year" => 3],
        3 => ["id" => 3, "name" => "Hotdog", "course" => "BSIT", "email" => "hotdog@yahoo.com", "year" => 2],
        4 => ["id" => 4, "name" => "Plencia", "course" => "BSN", "email" => "plencia@gmail.com", "year" => 1],
    ];
    return view('students.index', ["samples" => $samples]);
});


Route::get('/show/student/{id}', function ($id) {

    $samples = [
        1 => ["id" => 1, "name" => "Alice", "course" => "BSCS", "email" => "alice@gmail.cm", "year" => 2],
        2 => ["id" => 2, "name" => "Mewtwo", "course" => "BSIT", "email" => "mewtwo@gmail.com", "year" => 3],
        3 => ["id" => 3, "name" => "Hotdog", "course" => "BSIT", "email" => "hotdog@yahoo.com", "year" => 2],
        4 => ["id" => 4, "name" => "Plencia", "course" => "BSN", "email" => "plencia@gmail.com", "year" => 1],
    ];

    $student = $samples[$id] ?? abort(404);

    return view('students.show', compact('student'));
});



Route::get('/add', function () {
    return view('students.create');
});

Route::get('/edit/{id}', function ($id) {

    $samples = [
        1 => ["id" => 1, "name" => "Alice", "course" => "BSCS", "email" => "alice@gmail.cm", "year" => 2],
        2 => ["id" => 2, "name" => "Mewtwo", "course" => "BSIT", "email" => "mewtwo@gmail.com", "year" => 3],
        3 => ["id" => 3, "name" => "Hotdog", "course" => "BSIT", "email" => "hotdog@yahoo.com", "year" => 2],
        4 => ["id" => 4, "name" => "Plencia", "course" => "BSN", "email" => "plencia@gmail.com", "year" => 1],
    ];

    $student = $samples[$id] ?? abort(404);

    return view('students.edit', compact('student'));
});
