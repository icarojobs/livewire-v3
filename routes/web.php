<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Counter;


Route::get('/', [TaskController::class, 'index']);

//Route::get('/', Counter::class);
