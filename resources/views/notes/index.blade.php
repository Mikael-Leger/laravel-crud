@extends('layouts.app')

@section('content')
    <div class="container">
        @livewire('utils-redirect')

        <div class="container-centered">
            <h1>Notes List</h1>
            <a href="{{ route('notes.create') }}" class="btn">Create Note</a>
            <ul class="wrapper">
                @foreach ($notes as $note)
                    <li class="container-centered card {{ $note->is_done ? 'card-green' : 'card-red' }}">
                        <a href="{{ route('notes.show', $note->id) }}" class="container-centered">
                            <div>
                                <span class="title">{{ $note->title }}</span>
                                <span>({{ $note->slug }})</span>
                            </div>
                            <div class="container-centered gap-1">
                                <div>{{ $note->content }}</div>
                                @livewire('utils-date-format', ['date' => $note->deadline])
                                <div>{{ $note->is_done ? 'Finished' : 'Not finished' }}</div>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection
