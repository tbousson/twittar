<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\FrontController;

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

// Route::get('/', function () {
//     return Inertia::render('Home', [
//         'canLogin' => Route::has('login'),
//         'canRegister' => Route::has('register'),
//         'laravelVersion' => Application::VERSION,
//         'phpVersion' => PHP_VERSION,
//     ]);
// })->name('home');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->name('dashboard');


//admin Routes


Route::middleware(['auth:sanctum', 'verified','isAdmin'])->get('/admin/users', [UserController::class, 'index'])->name('admin.users');
Route::middleware(['auth:sanctum', 'verified','isAdmin'])->get('/admin/roles', [RoleController::class, 'index'])->name('admin.roles');
Route::middleware(['auth:sanctum', 'verified','isAdmin'])->get('/admin/messages', [MessageController::class, 'index'])->name('admin.messages');

//User Routes
Route::middleware(['auth:sanctum', 'verified'])->get('/', [FrontController::class, 'home'])->name('home');
Route::middleware(['auth:sanctum', 'verified'])->get('/profile', [FrontController::class, 'profile'])->name('profile');
Route::middleware(['auth:sanctum', 'verified'])->get('/explore', [FrontController::class, 'explore']
)->name('explore');
Route::middleware(['auth:sanctum', 'verified'])->get('/settings', function () {
    return redirect('/user/profile');
});
Route::middleware(['auth:sanctum', 'verified'])->get('/{displayName}', [FrontController::class, 'userPage']
);

Route::middleware(['auth:sanctum', 'verified'])->post('/createMessage', [FrontController::class, 'createMessage']
);

