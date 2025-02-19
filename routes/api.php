<?php

use App\Http\Controllers\API\OfficeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return response()->json([
        'success' => true,
        'message' => 'Detail logged in user',
        'data' => $request->user()
    ]);
});

Route::resource('office', OfficeController::class)->only(['index', 'show'])->middleware(['auth:sanctum']);

require __DIR__.'/auth.php';