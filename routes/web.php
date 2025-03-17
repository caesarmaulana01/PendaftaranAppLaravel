<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PendaftaranController;

Route::get('/', function () {
    return redirect()->route('pendaftaran.create');
});

Route::get('/pendaftaran', [PendaftaranController::class, 'create'])->name('pendaftaran.create');
Route::post('/pendaftaran/pdf', [PendaftaranController::class, 'exportPDF'])->name('pendaftaran.pdf');

