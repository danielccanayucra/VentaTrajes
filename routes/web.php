<?php


use App\Livewire\ClientMain;
use App\Livewire\Dashboard\Main;
use App\Livewire\IndexLivewire;
use App\Livewire\Traje;
use App\Models\Client;
use Illuminate\Support\Facades\Route;
/**
*Route::get('/', function () {
    *return view('welcome');

*});
*/


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',Main::class)->name('dashboard');
    Route::get('clientes',ClientMain::class)->name('clientes');

});

Route::get('/',[IndexLivewire::class,'render'])->name('index');

