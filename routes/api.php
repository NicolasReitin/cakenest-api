<?php

use App\Http\Controllers\CupcakeController;
use App\Http\Middleware\IsAdmin;
use App\Http\Resources\CupcakeResource;
use App\Http\Resources\UserResource;
use App\Models\Cupcake;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users', function() {
    $user = User::with('orders')->first();
    return UserResource::collection(User::paginate(5));
});

//---------------------------- Cupcake --------------------------------
Route::get('/cupcakes', [CupcakeController::class, 'index'])->name('cupcakes.index')->middleware(IsAdmin::class);
Route::post('/cupcakes', [CupcakeController::class, 'store'])->name('cupcakes.store');
Route::get('/cupcakes/{cupcake}', [CupcakeController::class, 'show'])->name('cupcakes.show');
Route::put('/cupcakes/{cupcake}', [CupcakeController::class, 'update'])->name('cupcakes.update');
Route::delete('/cupcakes/{cupcake}', [CupcakeController::class, 'destroy'])->name('cupcakes.destroy');

//Route::apiResource('cupcakes', CupcakeController::class);


