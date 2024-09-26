<?php

use App\Livewire\Budgetlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/createorupdateaccount', [Budgetlist::class, 'saveAccount']);
Route::put('/updateaccount/{accountid}', [Budgetlist::class, 'updateAccount']);
Route::delete('/deleteaccount/{accountid}', [Budgetlist::class, 'deleteAccount']);

