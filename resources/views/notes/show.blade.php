@extends('layouts.app')

@section('content')
    <h1>{{ $note->title }} ({{ $note->slug }})</h1>
    <p>{{ $note->content }}</p>
    <p>{{ $note->deadline }}</p>
    <p>{{ $note->is_done ? 'Finished' : 'Not finished' }}</p>
@endsection
