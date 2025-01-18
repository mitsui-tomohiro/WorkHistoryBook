<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ProfilePost;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', ProfilePost::class);
