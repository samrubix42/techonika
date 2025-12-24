<?php

use App\Livewire\Public\Home\Index;
use Illuminate\Support\Facades\Route;

Route::get('/',action: Index::class)->name('index');
