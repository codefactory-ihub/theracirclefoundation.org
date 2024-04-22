<?php

use App\Livewire\Admin\{ProjectList, CreateProject};
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name("home");

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('admin/projects', ProjectList::class)->name("admin.projects");
    Route::get('admin/projects/create', CreateProject::class)->name("admin.create-project");
});
