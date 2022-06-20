<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;

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

Route::get('/', [App\Http\Controllers\EventController::class, 'index'])->name('welcome');

Route::get('/event/{id}', [App\Http\Controllers\EventController::class, 'show'])->name('event.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

<<<<<<< HEAD
Route::get('/contacts', [\App\Http\Controllers\ContactController::class, 'index'])->name('contacts.index');

require __DIR__.'/auth.php';
=======
Route::get('send-mail', function () {

    $details = [
        'title' => 'Sample Title From Mail',
        'body' => 'This is sample content we have added for this test mail'
    ];

    Mail::to('test@gmail.com')->send(new \App\Mail\Uitnodiging($details));

    dd("Email is Sent, please check your inbox.");
});

require __DIR__ . '/auth.php';
>>>>>>> feature_13
