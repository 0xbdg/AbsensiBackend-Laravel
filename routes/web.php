<?php

use App\Models\User;
use App\Models\Siswa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\UserController;
use App\Http\Resources\Student;


Route::get('/admin/dashboard/', function () {
    if (Auth::guest()){
        return redirect()->route("login");
    }

    return view('dashboard', ["user_count" => User::count(), "student_count"=> Siswa::count(), "mig_count"=>DB::table('migrations')->count()]);
})->middleware("auth")->name("dashboard");

Route::get("/data/siswa/{uid}", [SiswaController::class, "api"]);

Route::get('/admin/student/',[SiswaController::class, "index"])->middleware("auth")->name("student");
Route::get('/admin/student/create/', [SiswaController::class, "create"])->middleware("auth")->name("student_create");
Route::post('/admin/student/create/', [SiswaController::class, "store"])->middleware("auth")->name("student_store");
Route::get('/admin/student/edit/{id}', [SiswaController::class, "edit"])->middleware("auth")->name("student_edit");
Route::post('/admin/student/update/{id}', [SiswaController::class, "update"])->middleware("auth")->name("student_update");
Route::delete('/admin/student/delete/{id}', [SiswaController::class, "destroy"])->middleware("auth")->name("student_delete");


Route::get('/admin/superuser', [UserController::class, "index"])->middleware("auth")->name("superuser");
Route::get('/admin/superuser/edit/{id}', [UserController::class, "edit"])->middleware("auth")->name("superuser_edit");
Route::post('/admin/superuser/update/{id}', [UserController::class, "update"])->middleware("auth")->name("superuser_update");
Route::get('/admin/superuser/create/', [UserController::class, "create"])->middleware("auth")->name("superuser_create");
Route::post('/admin/superuser/create/', [UserController::class, "store"])->middleware("auth")->name("superuser_store");
Route::delete('/admin/superuser/delete/{id}', [UserController::class, "destroy"])->middleware("auth")->name("superuser_delete");


Route::get('/admin/login/', [AuthController::class, "loginpage"])->name("login");
Route::post('/admin/login/', [AuthController::class, "login"])->name("login");
Route::get('/admin/logout', [AuthController::class, 'logout'])->name('logout');