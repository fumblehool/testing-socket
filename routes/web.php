<?php

use App\Jobs\DoSomething;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/schedule-queue', function() {
    DoSomething::dispatch();
    return response()->json(['message' => 'something was queued']);
});