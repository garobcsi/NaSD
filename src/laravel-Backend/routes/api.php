<?php

use App\Http\Controllers\AllClothingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClothingController;
use App\Http\Controllers\CreatureController;
use App\Http\Controllers\RegisterController;
use App\Http\Resources\UserResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/authenticate',[AuthController::class,'authenticate'])->name('auth.authenticate');
Route::post('/register',[RegisterController::class,'register'])->name('auth.register');

Route::get('/all/clothing',[AllClothingController::class,'index'])->name('clothing.all');
Route::get('/all/clothing/{id}',[AllClothingController::class,'show'])->name('clothing.all.show');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/creature',[CreatureController::class,'index'])->name('creature');
    Route::put('/creature',[CreatureController::class,'update'])->name('creature.put');

    Route::get('/clothing',[ClothingController::class,'index'])->name('clothing');
    Route::post('/clothing',[ClothingController::class,'store'])->name('clothing.store');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return new UserResource($request->user());
});
