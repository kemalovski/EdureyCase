<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Admin\AdminAuth;
use App\Http\Controllers\Admin\Confirmation\ConfirmationUserController;
use App\Http\Controllers\Admin\Confirmation\ShowConfirmationUserController;
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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


/*Case 2  ADMİN */
Route::get('/admin',[AdminAuth::class,'show'])->name('adminlogin');
Route::post('/admin',[AdminAuth::class,'login']);
Route::group(['middleware' => 'auth:admin'],function (){
Route::post('/admin-confirm',[ConfirmationUserController::class,'confirm']);
Route::get('/admin-uncorfirmed',[ShowConfirmationUserController::class,'show'])->name('uncorfirmed');
Route::get('/admin-logout',[AdminAuth::class,'logout']);
});

/*Case 1 Web Page */
Route::get('/case1',function (){
    return Inertia::render('Case1/case1');
});

require __DIR__.'/auth.php';
