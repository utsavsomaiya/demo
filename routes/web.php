<?php

use App\Livewire\Demo;
use App\Livewire\Demo1;
use App\Livewire\Demo2;
use App\Livewire\Demo3;
use Illuminate\Support\Facades\Route;

config(['livewire.layout' => 'app']);
config(['livewire.temporary_file_upload.disk' => 's3']);
config(['livewire.temporary_file_upload.rules' => ['image', 'max:100']]);
config(['livewire.temporary_file_upload.cleanup' => true]);

config(['livewire.navigate.show_progress_bar' => true]);
// config(['livewire.navigate.show_progress_bar' => false]);
config(['livewire.navigate.progress_bar_color' => '#ff0000']);

Route::get('/', Demo::class)->name('demo');

Route::get('/demo1', Demo1::class)->name('demo1');
Route::get('/demo2', Demo2::class)->name('demo2');
Route::get('/demo3', Demo3::class)->name('demo3');
