<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\ViteController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/admin_side', [AdminController::class, 'index'])->name('admin');
Route::get('/admin_side/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::get('/admin_side/profile/edit/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
Route::post('/proup/{id}', [ProfileController::class, 'update']);

Route::get('/admin_side/social', [SocialController::class, 'index'])->name('social.index');
Route::get('/admin_side/social/edit/{id}', [SocialController::class, 'edit'])->name('social.edit');
Route::post('/soup/{id}', [SocialController::class, 'update']);

Route::get('/admin_side/edu', [EducationController::class, 'index'])->name('edu.index');
Route::get('/admin_side/edu/create', [EducationController::class, 'create'])->name('edu.create');
Route::get('/admin_side/edu/edit/{id}', [EducationController::class, 'edit'])->name('edu.edit');
Route::post('/edgo', [EducationController::class, 'store']);
Route::post('/edup/{id}', [EducationController::class, 'update']);
Route::delete('/admin_side/edu/destroy/{id}', [EducationController::class, 'destroy'])->name('edu.destroy');

Route::get('/admin_side/exp', [ExperienceController::class, 'index'])->name('exp.index');
Route::get('/admin_side/exp/create', [ExperienceController::class, 'create'])->name('exp.create');
Route::get('/admin_side/exp/edit/{id}', [ExperienceController::class, 'edit'])->name('exp.edit');
Route::post('/expgo', [EExperienceController::class, 'store']);
Route::post('/expup/{id}', [ExperienceController::class, 'update']);
Route::delete('/admin_side/exp/destroy/{id}', [ExperienceController::class, 'destroy'])->name('exp.destroy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/vite', [ViteController::class, 'index'])->name('vite');

