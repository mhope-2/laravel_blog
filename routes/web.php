<?php

use App\Models\Task;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
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


//Route::get('/tasks', [TasksController::class, 'index']);
//Route::get('/tasks/{task}', [TasksController::class, 'show']);

Route::get('/', [PostController::class, 'index'])->name('index');

/** Posts */
Route::prefix('posts')->group(function(){
    Route::post('/', [PostController::class, 'store'])->name('posts');
    Route::get('/create', [PostController::class, 'create'])->name('posts.create');
    Route::get('/{post}', [PostController::class, 'show']);


});








