<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return response()->json([
        'message' => 'Default web route, you can comment this out later. Use `api.php` routes and send data to react app.',
    ]);
});
