<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\V1\LinkController;

Route::get('/', function () {
    return response()->json([
        'message' => 'Default web route, you can comment this out later. Use `api.php` routes and send data to react app.',
    ]);
});

// Example | consumes index method from LinkController
Route::get('/link', [LinkController::class, 'index']);
