@extends('layouts.app')

@section('content')
    <x-button onclick="window.location.href='/notes'" color="blue">Back</x-button>
    
    @livewire('create-note')
@endsection
