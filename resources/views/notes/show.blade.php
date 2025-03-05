@extends('layouts.app')

@section('content')
    @livewire('utils-redirect', ['location' => '/notes'])
    <div class="container-centered">
        <h1>Show Note</h1>
        <div class="container-centered card {{ $note->is_done ? 'card-green' : 'card-red' }}">
            <div class="container-centered">
                <div>
                    <span class="title">{{ $note->title }}</span>
                    <span>({{ $note->slug }})</span>
                </div>
                <div class="container-centered-content">
                    <div>{{ $note->content }}</div>
                    @livewire('utils-date-format', ['date' => $note->deadline])
                    <div>{{ $note->is_done ? 'Finished' : 'Not finished' }}</div>
                </div>
            </div>
        </div>
        <div class="container-centered">
            <a href="{{ route('notes.edit', $note->id) }}" class="btn">Edit</a>
        </div>
        <form action="{{ route('notes.destroy', $note->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <div class="container-centered">
                <button type="submit" class="btn">Delete</button>
            </div>
        </form>
            
    </div>
@endsection
