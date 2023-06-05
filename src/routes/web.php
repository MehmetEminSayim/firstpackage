<?php

use MG\Notes\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('note', Controllers\NoteController::class);
