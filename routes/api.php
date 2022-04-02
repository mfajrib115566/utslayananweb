<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('v1', [\App\Http\Controllers\WrapperApiController::class, 'versi'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('versi');
Route::get('/v1/sholat/kota/cari/kuningan', [\App\Http\Controllers\WrapperApiController::class, 'pencarian'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('pencarian');
Route::get('/v1/sholat/kota/id/1609', [\App\Http\Controllers\WrapperApiController::class, 'kota'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('kota');
Route::get('/v1/sholat/kota/semua', [\App\Http\Controllers\WrapperApiController::class, 'semuakota'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('semuakota');
Route::get('/v1/sholat/jadwal/1609/2021/06/23', [\App\Http\Controllers\WrapperApiController::class, 'jadwalhari'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('jadwalhari');
Route::get('/v1/sholat/jadwal/1609/2021/04', [\App\Http\Controllers\WrapperApiController::class, 'jadwalbulan'])
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('jadwalbulan');

Route::get('user/identitas', function () {
    return [
        'code' => 0,
        'data' => [
            'npm' => '197006025',
            'nama' => 'Muhammad Fajri Budiansyah',
            'email' => '197006025@student.unsil.ac.id'
        ]
    ];
})
    ->middleware(\App\Http\Middleware\NpmMiddleware::class)
    ->name('identitas');

