<?php

use App\Livewire\Demo;
use Illuminate\Support\Facades\Route;

config(['livewire.layout' => 'app']);
// config(['livewire.inject_assets' => false]);
config(['livewire.temporary_file_upload.disk' => 's3']);
config(['livewire.temporary_file_upload.rules' => ['image', 'max:100']]);
config(['livewire.temporary_file_upload.cleanup' => true]);

Route::get('/', Demo::class)->name('demo');
