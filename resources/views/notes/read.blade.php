@extends('layouts.app')

@section('content')
    <div class="container flex-col flex-gap">
        <x-button onclick="window.location.href='/notes'" color="blue" size="big">Back</x-button>

        @livewire('read-note', ['noteId' => $note->id])
    </div>
@endsection
