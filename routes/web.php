<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Areas;
use App\Http\Controllers\TrainingCenters;
use App\Http\Controllers\Computers;
use App\Http\Controllers\Teachers;
use App\Http\Controllers\Courses;
use App\Http\Controllers\Apprentices;
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

Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

/*aAres*/
Route::get('areas', [Areas::class, 'index'])->name('areas.index');
Route::get('area/create', [Areas::class, 'create'])->name('area.create');
Route::post('area', [Areas::class, 'store'])->name('area.store');
Route::get('area/{area}', [Areas::class, 'show'])->name('area.show');
Route::get('area/{area}/editar', [Areas::class, 'edit'])->name('area.edit');
Route::put('area/{area}', [Areas::class, 'update'])->name('area.update');
Route::delete('area/{area}', [Areas::class, 'destroy'])->name('area.destroy');

/*Computers*/
Route::get('computers', [Computers::class, 'index'])->name('computers.index');
Route::get('computer/create', [Computers::class, 'create'])->name('computer.create');
Route::post('computer', [Computers::class, 'store'])->name('computer.store');
Route::get('computer/{computer}', [Computers::class, 'show'])->name('computer.show');
Route::get('computer/{computer}/editar', [Computers::class, 'edit'])->name('computer.edit');
Route::put('computer/{computer}', [Computers::class, 'update'])->name('computer.update');
Route::delete('computer/{computer}', [Computers::class, 'destroy'])->name('computer.destroy');

/*TrainingCenters*/
Route::get('training-centers', [TrainingCenters::class, 'index'])->name('training-centers.index');
Route::get('training-center/create', [TrainingCenters::class, 'create'])->name('training-center.create');
Route::post('training-center', [TrainingCenters::class, 'store'])->name('training-center.store');
Route::get('training-center/{trainingCenter}', [TrainingCenters::class, 'show'])->name('training-center.show');
Route::get('training-center/{trainingCenter}/editar', [TrainingCenters::class, 'edit'])->name('training-center.edit');
Route::put('training-center/{trainingCenter}', [TrainingCenters::class, 'update'])->name('training-center.update');
Route::delete('training-center/{trainingCenter}', [TrainingCenters::class, 'destroy'])->name('training-center.destroy');

/*Teachers*/
Route::get('teachers', [Teachers::class, 'index'])->name('teachers.index');
Route::get('teacher/create', [Teachers::class, 'create'])->name('teacher.create');
Route::post('teacher', [Teachers::class, 'store'])->name('teacher.store');
Route::get('teacher/{teacher}', [Teachers::class, 'show'])->name('teacher.show');
Route::get('teacher/{teacher}/editar', [Teachers::class, 'edit'])->name('teacher.edit');
Route::put('teacher/{teacher}', [Teachers::class, 'update'])->name('teacher.update');
Route::delete('teacher/{teacher}', [Teachers::class, 'destroy'])->name('teacher.destroy');

/*Courses*/
Route::get('courses', [Courses::class, 'index'])->name('courses.index');
Route::get('course/create', [Courses::class, 'create'])->name('course.create');
Route::post('course', [Courses::class, 'store'])->name('course.store');
Route::get('course/{course}', [Courses::class, 'show'])->name('course.show');
Route::get('course/{course}/editar', [Courses::class, 'edit'])->name('course.edit');
Route::put('course/{course}', [Courses::class, 'update'])->name('course.update');
Route::delete('course/{course}', [Courses::class, 'destroy'])->name('course.destroy');

/*Apprentices*/
Route::get('apprentices', [Apprentices::class, 'index'])->name('apprentices.index');
Route::get('apprentice/create', [Apprentices::class, 'create'])->name('apprentice.create');
Route::post('apprentice', [Apprentices::class, 'store'])->name('apprentice.store');
Route::get('apprentice/{apprentice}', [Apprentices::class, 'show'])->name('apprentice.show');
Route::get('apprentice/{apprentice}/editar', [Apprentices::class, 'edit'])->name('apprentice.edit');
Route::put('apprentice/{apprentice}', [Apprentices::class, 'update'])->name('apprentice.update');
Route::delete('apprentice/{apprentice}', [Apprentices::class, 'destroy'])->name('apprentice.destroy');