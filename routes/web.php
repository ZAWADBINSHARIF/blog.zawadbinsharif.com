<?php


use App\Livewire\Home;
use App\Livewire\Blogs;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", Home::class);
Route::get("/blogs", Blogs::class);
