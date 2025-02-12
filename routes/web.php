<?php

use App\Livewire\ClientList;
use App\Livewire\CreatClient;
use App\Livewire\CreateRdv;
use App\Livewire\CreateTeam;
use App\Livewire\CreatService;
use App\Livewire\EditClient;
use App\Livewire\EditService;
use App\Livewire\RdvEdit;
use App\Livewire\RdvList;
use App\Livewire\ServiceList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('create/clients', CreatClient::class);//->name()
Route::get('clients', ClientList::class);//->name()
Route::get('clients/{client}/edit', EditClient::class);//->name()
Route::get('create/team', CreateTeam::class);//->name()
Route::get('create/service', CreatService::class);//->name()
Route::get('services', ServiceList::class);//->name()
Route::get('services/{service}/edit', EditService::class);//->name()
Route::get('create/Rdv', CreateRdv::class);//->name()
Route::get('rdvs', RdvList::class);//->name()
Route::get('rdvs/{rdv}/edit', RdvEdit::class);//->name()




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
