<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form\FormController;

Route::resource('form', FormController::class);
