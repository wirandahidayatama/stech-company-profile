<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/services', function () {
    return view('services.services');
});

Route::get('/projects', function () {
    return view('projects.projects');
});

Route::get('/abouts', function () {
    return view('abouts.about');
});

Route::get('/contacts', function () {
    return view('contacts.contacts');
});

Route::get('/about/details', function () {
    return view('abouts.detail');
});


