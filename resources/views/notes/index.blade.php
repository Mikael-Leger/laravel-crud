@extends('layouts.app')

@section('content')
    <button onclick="window.location.href='/'">Back</button>
    <h1>Notes List</h1>
    <a href="{{ route('notes.create') }}">Create Note</a>
    <ul>
        @foreach ($notes as $note)
            <li>
                <a href="{{ route('notes.show', $note->id) }}">{{ $note->title }}</a>
                <a href="{{ route('notes.show', $note->id) }}">{{ $note->slug }}</a>
                <a href="{{ route('notes.show', $note->id) }}">{{ $note->content }}</a>
                <a href="{{ route('notes.show', $note->id) }}">{{ $note->deadline }}</a>
                <a href="{{ route('notes.show', $note->id) }}">{{ $note->is_done ? 'Finished' : 'Not finished' }}</a>
                <a href="{{ route('notes.edit', $note->id) }}">Edit</a>
                <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
