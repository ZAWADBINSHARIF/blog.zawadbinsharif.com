<?php


use App\Livewire\Home;
use App\Livewire\Blogs;
use App\Livewire\Login;
use App\Livewire\Registration;
use App\Livewire\SingleBlog;
use Illuminate\Support\Facades\Route;


Route::get("/", Home::class);
Route::get("/blogs", Blogs::class);
Route::get("/blogs/{slug}", SingleBlog::class);
Route::get("/login", Login::class);
Route::get("/registration", Registration::class);
