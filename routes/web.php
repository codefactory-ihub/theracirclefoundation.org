<?php

use App\Livewire\Admin\{CreateProject, UpdateProject, DonationList, ProjectList, ReportRequestList, VolunteerList};
use App\Livewire\{ContactPage, DonationsPage, ProjectsPage, VolunteerPage, HomePage, ReportRequestForm};
use Illuminate\Support\Facades\Route;

use Laravel\Fortify\Http\Controllers\RegisteredUserController;


Route::get('/', HomePage::class)->name("home");
Route::get('/projects', ProjectsPage::class)->name("projects");
Route::get('/donate', DonationsPage::class)->name("donate");
Route::get('/contact', ContactPage::class)->name("contact");
Route::get('/volunteer', VolunteerPage::class)->name("volunteer");
Route::get('/request-report', ReportRequestForm::class)->name("request-report");

Route::get('/register', [RegisteredUserController::class, 'create'])
    // ->middleware(['auth'])
    ->name('register');

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
    Route::get('admin/projects/update/{projectKey}', UpdateProject::class)->name("admin.update-project");
    Route::get('admin/volunteers', VolunteerList::class)->name("admin.volunteers");
    Route::get('admin/donations', DonationList::class)->name("admin.donations");
    Route::get('admin/report-requests', ReportRequestList::class)->name("admin.report-requests");
});
