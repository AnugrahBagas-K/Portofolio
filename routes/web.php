<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

route::get("/", [IndexController::class, 'Index'])->name('Index');
