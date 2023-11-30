<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

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
//     return view('edit');
// });

Route::get('reg', [AuthController::class, 'register']) -> middleware('alreadyLogin');
Route::get ('bookList', [BookController::class, 'list']) -> middleware('check');
Route::get('/', [BookController::class, 'home']);
Route::post('input', [BookController::class, 'input']);
Route::get('delete/{id}', [BookController::class, 'delete']);
Route::get('edit/{id}', [BookController::class, 'edit']);
Route::post('update/{id}', [BookController::class, 'update']);
Route::post('user', [AuthController::class, 'inputUser']);
Route::post('userLogin', [AuthController::class, 'loginUser']);
Route::get('login', [AuthController::class, 'login']) -> middleware('alreadyLogin');
Route::get('userLogin', [AuthController::class, 'userLogin']);
Route::get('out', [AuthController::class, 'out']);
