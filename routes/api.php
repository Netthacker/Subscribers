<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Models\Subscriber;
use App\Http\Resources\SubscriberResource as SubRes;

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

Route::get('/subscriber/{id}', function (string $id) {
    return new SubRes(Subscriber::findOrFail($id));
});

Route::get('/subscribers', function () {
    return SubRes::collection(Subscriber::all());
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

