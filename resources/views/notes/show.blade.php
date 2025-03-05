@extends('layouts.app')

@section('content')
    <h1>{{ $note->title }} ({{ $note->slug }})</h1>
    <p>{{ $note->content }}</p>
    @livewire('utils-date-format', ['date' => $note->deadline])
    <p>{{ $note->is_done ? 'Finished' : 'Not finished' }}</p>
    <a href="{{ route('notes.edit', $note->id) }}">Edit</a>
    <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
