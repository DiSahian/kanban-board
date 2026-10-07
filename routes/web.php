<?php

use App\Livewire\Kanban\Board;
use Illuminate\Support\Facades\Route;

Route::get('/', Board::class)->middleware('auth');

require __DIR__.'/auth.php';
