<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

// Common Resource Routes:
// index - Show all posts
// show - Show single post
// create - Show form to create new post
// store - Store new post
// edit - Show form to edit post
// update - Update post
// destroy - Delete post

// All Posts
Route::get('/', [PostController::class, 'index']);

// Show Create Form
Route::get('/posts/create', [PostController::class, 'create'])->middleware('auth');

// Store Post Data
Route::post('/posts', [PostController::class, 'store'])->middleware('auth');

// Show Edit Form
Route::get('/posts/{post}/edit', [PostController::class, 'edit'])->middleware('auth');

// Update Post
Route::put('/posts/{post}', [PostController::class, 'update'])->middleware('auth');

// Delete Post
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->middleware('auth');

// Manage Posts
Route::get('/posts/manage', [PostController::class, 'manage'])->middleware('auth');

// Single Post
Route::get('/posts/{post}', [PostController::class, 'show']);

// Show Register/Create Form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log User Out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show Login Form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log In User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
