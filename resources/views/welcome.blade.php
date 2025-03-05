@extends('layouts.app')

@section('content')
    <h2>Entities:</h2>
    <ul>
        @foreach ($entities as $entity => $url)
            <li><a href="{{ $url }}">{{ $entity }}</a></li>
        @endforeach
    </ul>
@endsection
