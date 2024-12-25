<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/jadwal', function () {
    return view('jadwal', ['title' => 'Jadwal Dokter']);
});

Route::get('/reservasi', function () {
    return view('reservasi', ['title' => 'Halaman Reservasi']);
});

Route::get('/konfirmasi', function () {
    return view('konfirmasi', ['title' => 'Halaman Konfirmasi Reservasi']);
});