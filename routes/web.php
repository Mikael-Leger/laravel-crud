<?php

use Illuminate\Support\Facades\Route;
use App\Models\Note;
use App\Livewire\ReadNotes;
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

Route::get('/notes', ReadNotes::class)->name('notes.index');

Route::get('/notes/create', [NoteController::class, 'create'])->name('notes.create');

Route::get('/notes/{id}', [NoteController::class, 'read'])->name('notes.read');

Route::resource('notes', NoteController::class);
