<?php

use App\Http\Controllers\AddminController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('multiplication',function() {
    return view('multiplication');
});
Route::post('multiplication',function(Request $request){
    $data['number'] = $request->input('number');
    return view('result', $data );
});
Route::get('/form',[AddminController::class,'index']);
Route::get('/login',[AuthController::class,'login_view']);
Route::get('/register', [AuthController::class, 'register_view']);
Route::get('/logout', [AuthController::class, 'logout_process']);
Route::post('/login', [AuthController::class, 'login_process']);
Route::post('/register', [AuthController::class, 'register_process']);
Route::get('homepage',function(){
    return view('hompage');
});
Route::get('/multiplication_table',function(){
    return view('multiplication_table');
});