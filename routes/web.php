<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;

// home page
Route::get('/', [ HomeController::class, 'loadHomePage' ]);

// login page
Route::get("/login", [
    LoginController::class,
    'loadLoginPage'
]);

// login logic
Route::post("/login", [
    LoginController::class,
    'doLogin'
]);

// sign up page
Route::get("/signup", [
    SignUpController::class,
    'loadSignUpPage'
]);
// Sign up logic
Route::post("/signup", [
    SignUpController::class,
    'doSignUp'
]);

// logout
Route::get("/logout", [
    LogoutController::class,
    'logout'
]);

// Post routes
/*
- GET `/posts` (index)
- GET `/posts/create` (create)
- POST `/posts` (store)
- GET `/posts/{post}` (show)
- GET `/posts/{post}/edit` (edit)
- PUT/PATCH `/posts/{post}` (update)
- DELETE `/posts/{post}` (destroy)
*/
Route::resource("posts", PostController::class);