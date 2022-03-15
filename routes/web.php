<?php

use App\Http\Controllers\DonationsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\ProgramsController;
use App\Models\Members;

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
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/donations', [DonationsController::class, 'store']);
Route::get('/donations/{id}', [DonationsController::class, 'getDonationPrints']);
Route::get('/members/', [MembersController::class, 'index']);
Route::post('/members/', [MembersController::class, 'store']);
Route::get('/programs/', [ProgramsController::class, 'index']);
Route::post('/programs/', [ProgramsController::class, 'store']);
