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
    return view('welcome');
});

Auth::routes();

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
Route::get('admin/ticket', 'ticketcontroller@index')->name('admin.ticket')->middleware('is_admin');
Route::get('admin/ticket/tambah', 'ticketcontroller@tambah')->name('admin.ticket-tambah')->middleware('is_admin');
Route::post('admin/ticket/store', 'ticketcontroller@store')->name('admin.ticket-store')->middleware('is_admin');
Route::get('admin/ticket/edit{id}', 'ticketcontroller@edit')->name('admin.ticket-edit')->middleware('is_admin');
Route::put('admin/ticket/update{id}', 'ticketcontroller@update')->name('admin.ticket-update')->middleware('is_admin');
Route::get('admin/ticket/hapus{id}', 'ticketcontroller@destroy')->name('admin.ticket-hapus')->middleware('is_admin');
Route::get('ticket/cari', 'ticketcontroller@cari')->name('admin.ticket-cari')->middleware('is_admin');
Route::get('admin/riwayat', 'ticketcontroller@riwayat')->name('admin.ticket-riwayat')->middleware('is_admin');
Route::get('admin/tambah', 'ticketcontroller@tambahadmin')->name('admin.tambahadmin')->middleware('is_admin');
Route::post('user/tambah', 'HomeController@tambahuser')->name('user.tambah')->middleware('is_admin');

Route::get('pesan{id}', 'transaksicontroller@index');
Route::post('ticket/beli', 'transaksicontroller@transaksi');
Route::get('gagal', 'transaksicontroller@gagal');
Route::get('berhasil', 'transaksicontroller@berhasil');
Route::get('riwayat', 'transaksicontroller@riwayat');

Route::get('eticket{id}', 'transaksicontroller@eticket');

Route::get('/home', 'HomeController@index')->name('home');


