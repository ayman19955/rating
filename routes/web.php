<?php

use App\Http\Controllers\AssetController;
use App\Models\Asset;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $assets = Asset::all();
    return view('assets', compact('assets'));
});

Route::resource('assets', AssetController::class);
