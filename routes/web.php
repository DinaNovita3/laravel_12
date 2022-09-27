<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/home", [PageController::class, "home"])->name('home');
Route::get("/about", [PageController::class, "about"])->name('about');
Route::get("/galery", [PageController::class, "galery"])->name('galery');
Route::get("/contact", [PageController::class, "contact"])->name('contact');
Route::get("/post", [PageController::class, "index"])->name('index');
Route::get("/edit", [PageController::class, "edit"])->name('edit');
Route::post("/contact/submit", [PageController::class, "store"])->name('submit');
Route::resource('posts', PostController::class);

Route::get("posts/formUpload", [PostController::class, "formUpload"]);
Route::post("posts/upload", [PostController::class, "upload"]);




