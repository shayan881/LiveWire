<?php

use App\Livewire\CreateCourse;
use App\Livewire\Course;
use App\Livewire\ShowCourse;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/courses', ShowCourse::class);
// Route::get('courses/{id}', ShowCourse::class);

// Route::get('/', function() {
//     return view('welcome');
// });

Route::get('/courses', Course::class)->name('courses');
Route::get('/courses/create', CreateCourse::class)->name('courses.create');
Route::get('/courses/show', Course::class)->name('courses.show');