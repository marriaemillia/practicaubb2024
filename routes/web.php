<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CampsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DepartmentsController;
use App\Http\Controllers\AuthController;


Route::get("/camps", [CampsController::class, 'index'])->name('camps.index');
Route::get('/camps/create', [CampsController::class, 'create'])->name('camps.create');
Route::get("/camps/{camp}",[CampsController::class, 'view']);
Route::post('/camps', [CampsController::class, 'store'])->name('camps.store');
Route::post('/camps/{camp}',[CampsController::class,'update'])->name('camps.update');
Route::get('/camps/{camp}/delete', [CampsController::class,'delete'])->name('camps.delete');

Route::get('/',[WelcomeController::class,'view'])->name('camps.view');

Route::get("/departments", [DepartmentsController::class, 'index'])->name('departments.index');
Route::get('/departments/create', [DepartmentsController::class, 'create'])->name('departments.create');
Route::get("/departments/{department}",[DepartmentsController::class, 'view']);
Route::post('/departments', [DepartmentsController::class, 'store'])->name('departments.store');
Route::post('/departments/{department}',[DepartmentsController::class,'update'])->name('departments.update');
Route::get('/departments/{department}/delete', [DepartmentsController::class,'delete'])->name('departments.delete');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginPost'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('registration', [AuthController::class, 'registrationPost'])->name('registration.post');

Route::get('logout',[AuthController::class, 'logout'])->name('logout');

Route::get("enroll", [CampsController::class, 'enroll'])->name('camps.enroll');



Route::get("participant", [CampsController::class, 'participant'])->name('camps.participant');
Route::get("voluntar", [CampsController::class, 'voluntar'])->name('camps.voluntar');
Route::get("echipament", [CampsController::class, 'echipament'])->name('camps.echipament');






