<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\masterPageController;
use App\Http\controllers\indexController;
use App\Http\controllers\loginController;
use App\Http\controllers\addTrainerController;
use App\Http\controllers\addMemberController;
use App\Http\controllers\addEquipmentController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\equipmentController;
use App\Http\Controllers\trainerController;
use App\Http\Controllers\paymentController;

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
Route::get('login', [loginController::class , 'index'])->name('login');
Route::post('login', [loginController::class , 'store'])->name('login');

Route::get('master', [masterPageController::class, 'show'])->name('master');;
Route::get('index', [indexController::class , 'show'])->name('index');
Route::post('index',[indexController::class , 'store']);

route::get('trainer', [trainerController::class, 'display'])->name('trainer');
route::get('trainer/delete/{id}', [trainerController::class, 'destory']);
route::get('trainer/edit/{id}', [trainerController::class, 'edit']);
route::put('trainer/update/{id}', [trainerController::class, 'update']);
route::post('trainer', [trainerController::class, 'store'])->name('trainer');
route::get('addTrainer', [addTrainerController::class, 'show'])->name('addTrainer');

route::get('addEquipment', [addEquipmentController::class, 'show'])->name('addEquipment');
route::get('equipment',[equipmentController::class , 'show'])->name('equipment');
route::post('equipment',[equipmentController::class , 'store']);
route::get('equipment/edit/{id}',[equipmentController::class , 'edit']);
route::put('equipment/update/{id}',[equipmentController::class , 'update']);
route::get('equipment/delete/{id}',[equipmentController::class , 'destory']);


route::get('addMember', [addMemberController::class , 'show'])->name('addMember');
route::post('member', [memberController::class, 'store']);
route::get('edit/{id}', [memberController::class, 'edit']);
route::put('update/{id}', [memberController::class, 'update']);
route::get('delete/{id}', [memberController::class, 'destory']);
route::get('member', [memberController::class, 'show'])->name('member');
Route::get('search', [memberController::Class, 'search'])->name('search');


Route::get('payment', [paymentController::class, 'show'])->name('payment');
