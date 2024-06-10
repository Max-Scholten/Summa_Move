<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\PerformanceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return view('auth/logsys');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('users', UserController::class);
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');


Route::resource('roles', RoleController::class);
Route :: get ( '/roles' , [RoleController::class, 'index'] ) -> name ( 'roles.index' );
Route :: get ( '/roles/create' , [RoleController::class, 'create'] ) -> name ( 'roles.create' );
Route :: post ( '/roles' , [RoleController::class, 'store'] ) -> name ( 'roles.store' );
Route :: get ( '/roles/{role}' , [RoleController::class, 'show'] ) -> name ( 'roles.show' );
Route :: get ( '/roles/{role}/edit' , [RoleController::class, 'edit'] ) -> name ( 'roles.edit' );
Route :: put ( '/roles/{role}' , [RoleController::class, 'update'] ) -> name ( 'roles.update' );
Route :: delete ( '/roles/{role}' , [RoleController::class, 'destroy'] ) -> name ( 'roles.destroy' );


Route::resource('exercises', ExerciseController::class);
Route::get('/exercises', [ExerciseController::class, 'index'])->name('exercises.index');
Route::get('/exercises/create', [ExerciseController::class, 'create'])->name('exercises.create');
Route::post('/exercises', [ExerciseController::class, 'store'])->name('exercises.store');
Route::get('/exercises/{exercise}', [ExerciseController::class, 'show'])->name('exercises.show');
Route::get('/exercises/{exercise}/edit', [ExerciseController::class, 'edit'])->name('exercises.edit');
Route::put('/exercises/{exercise}', [ExerciseController::class, 'update'])->name('exercises.update');
Route::delete('/exercises/{exercise}', [ExerciseController::class, 'destroy'])->name('exercises.destroy');

Route::resource('performances', PerformanceController::class);
Route::get('/performances', [PerformanceController::class, 'index'])->name('performances.index');
Route::get('/performances/create', [PerformanceController::class, 'create'])->name('performances.create');
Route::post('/performances', [PerformanceController::class, 'store'])->name('performances.store');
Route::get('/performances/{performance}', [PerformanceController::class, 'show'])->name('performances.show');
Route::get('/performances/{performance}/edit', [PerformanceController::class, 'edit'])->name('performances.edit');
Route::put('/performances/{performance}', [PerformanceController::class, 'update'])->name('performances.update');
Route::delete('/performances/{performance}', [PerformanceController::class, 'destroy'])->name('performances.destroy');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
