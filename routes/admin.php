<?php

use Illuminate\Support\Facades\Route;

Route::get("/createPost", fn() => view("livewire.create-post"));
