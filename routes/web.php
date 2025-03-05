<?php

use Illuminate\Support\Facades\Route;
use App\Models\Note;
use App\Http\Controllers\NoteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $entities = [
        'Notes' => route('notes.index'),
    ];

    return view('welcome', compact('entities'));
});

Route::get('/notes', function () {
    $notes = Note::all();
    return view('notes.index', compact('notes'));
})->name('notes.index');

Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');

Route::get('/notes/{id}', [NoteController::class, 'show'])->name('notes.show');

Route::resource('notes', NoteController::class);
