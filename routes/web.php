<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PortfolioController::class, 'index'])->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/portfolio-profile', App\Livewire\Admin\ProfileManager::class)->name('portfolio-profile');
    Route::get('/skills', App\Livewire\Admin\SkillManager::class)->name('skills');
    Route::get('/experiences', App\Livewire\Admin\ExperienceManager::class)->name('experiences');
    Route::get('/projects', App\Livewire\Admin\ProjectManager::class)->name('projects');
    Route::get('/educations', App\Livewire\Admin\EducationManager::class)->name('educations');
    Route::get('/social-links', App\Livewire\Admin\SocialLinkManager::class)->name('social-links');
});

require __DIR__.'/auth.php';
