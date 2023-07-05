<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatRoomController;
use App\Http\Controllers\ChatMyProfileController;
use App\Http\Controllers\FriendListController;
use App\Http\Controllers\ChatProfileController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [AuthenticatedSessionController::class, 'create']);  

Route::get('/friends', [FriendListController::class, 'index']); 

Route::get('/chat_my_profile', [ChatMyProfileController::class, 'index']); 

Route::get('/chat_profile', [ChatProfileController::class, 'index']); 

// Route::get('/chat/{chat}', [ChatController::class, 'index']); 
// Route::get('/chat/{chat}', [ChatController::class, 'getMessage']); 

Route::get('/home', [HomeController::class, 'index']); 
Route::get('/home/{chat}', [HomeController::class, 'getMessage']); 
Route::post('/message', [HomeController::class, 'store'])->name('home.store'); 

Route::get('/new', function() {
    return view('new');
}); 

// Route::post('/message', [MessageController::class, 'store'])->name('message.store'); 

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
