<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');
Route::livewire('/about', 'pages::about')->name('about');
Route::livewire('/contact', 'pages::contact')->name('contact');
Route::livewire('/terms', 'pages::terms')->name('terms');
Route::livewire('/privacy', 'pages::privacy')->name('privacy');

Route::livewire('/portfolio', 'pages::portfolio')->name('portfolio');
Route::livewire('/projects/{project:slug}', 'pages::project')->name('project');

Route::livewire('/services', 'pages::services')->name('services');
Route::livewire('/services/{service:slug}', 'pages::service')->name('service');
