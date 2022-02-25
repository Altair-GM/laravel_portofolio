<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\WorkController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name("home");
Route::get('/dashboard', [DashboardController::class, 'index'])->name("dashboard");

// About/edit
Route::get("/about/edit", [AboutController::class, "edit"]);
Route::put("/about/update", [AboutController::class, "update"]);

// Skill/edit
Route::get("/skills/edit", [SkillController::class, "edit"]);
Route::put("/skills/update", [SkillController::class, "update"]);

// Conctact edit
Route::get("/contact/edit", [ContactController::class, "edit"]);
Route::put("/contact/update", [ContactController::class, "update"]);

Route::put("/about", [AboutController::class, "index"]);

// Work
Route::get('works', [WorkController::class, 'index'])->name('works.index');
Route::get('works/create', [WorkController::class, 'create'])->name('works.create');
Route::post('works/store', [WorkController::class, 'store'])->name('works.store');
Route::get('works/{id}/edit', [WorkController::class, 'edit'])->name('works.edit');
Route::put('works/{id}/update', [WorkController::class, 'update'])->name('works.update');
Route::delete('works/{id}/delete', [WorkController::class, 'destroy'])->name('works.delete');
