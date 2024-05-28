<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\UserController;
use App\Models\User;
use App\Models\inventory;
use App\HTTP\controllers\InventryNewController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


Route::get('/temp', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('home');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified',
//])->group(function () {
//    Route::get('/inv', function () {
//        $inventories = inventory::all();
//        return view('inventory\index', compact('inventories'));
//    })->name('inv');
//   
//    Route::post('/inv', [InventoryController::class, 'store'])->name('inv.store');
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/inv', [InventryNewController::class, 'index'])->name('inv');
    Route::post('/inv/store', [InventryNewController::class, 'store'])->name('inv.store');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/users', function () {
        $users = User::all(); // Fetch all users from the database
        return view('user', compact('users')); // Pass the users to the view
    })->name('users');
});
//Route::any('user/delete/{id}', [UserController::class, 'destroy'])->name('user_delete');

route::get('/home',[HomeController::class,'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('products', ProductController::class);
});

Route::get('/userprofile', function () {
    return view('userprofile');
});