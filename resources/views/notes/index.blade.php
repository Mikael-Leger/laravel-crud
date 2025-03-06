@extends('layouts.app')

@section('content')
    <div class="container flex-col flex-gap">
        <x-button onclick="window.location.href='/'" color="blue" size="big">Back</x-button>

        @livewire('read-notes', ['notes' => $notes])
    </div>
@endsection
