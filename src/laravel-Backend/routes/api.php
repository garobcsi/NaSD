<?php

use App\Http\Controllers\AdminAllCreaturesController;
use App\Http\Controllers\AdminAllUsersClothingController;
use App\Http\Controllers\AdminAllUsersController;
use App\Http\Controllers\AdminAllUsersFoodController;
use App\Http\Controllers\AllClothingController;
use App\Http\Controllers\AllFoodController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClothingController;
use App\Http\Controllers\CreatureController;
use App\Http\Controllers\FoodController;
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

Route::get('/all/food',[AllFoodController::class,'index'])->name('food.all');
Route::get('/all/food/{id}',[AllFoodController::class,'show'])->name('food.all.show');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/creature',[CreatureController::class,'index'])->name('creature');
    Route::put('/creature',[CreatureController::class,'update'])->name('creature.put');

    Route::get('/clothing',[ClothingController::class,'index'])->name('clothing');
    Route::get('/clothing/{id}',[ClothingController::class,'show'])->name('clothing.show');
    Route::post('/clothing',[ClothingController::class,'store'])->name('clothing.store');

    Route::get('/food',[FoodController::class,'index'])->name('food');
    Route::get('/food/{id}',[FoodController::class,'show'])->name('food.show');
    Route::put('/food/{id}',[FoodController::class,'update'])->name('food.store');

    //Admins ONLY
    Route::get('/admin/all/users',[AdminAllUsersController::class,'index'])->name('admin.all.users');
    Route::get('/admin/all/users/{id}',[AdminAllUsersController::class,'show'])->name('admin.all.users.show');

    Route::get('/admin/all/creatures',[AdminAllCreaturesController::class,'index'])->name('admin.all.creatures');
    Route::get('/admin/all/creatures/{id}',[AdminAllCreaturesController::class,'show'])->name('admin.all.creatures.show');

    Route::get('/admin/all/food',[AdminAllUsersFoodController::class,'index'])->name('admin.all.food');
    Route::get('/admin/all/food/{id}',[AdminAllUsersFoodController::class,'show'])->name('admin.all.food.show');

    Route::get('/admin/all/clothing',[AdminAllUsersClothingController::class,'index'])->name('admin.all.clothing');
    Route::get('/admin/all/clothing/{id}',[AdminAllUsersClothingController::class,'show'])->name('admin.all.clothing.show');

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return new UserResource($request->user());
})->name('user');
