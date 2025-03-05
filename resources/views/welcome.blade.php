@extends('layouts.app')

@section('content')
    <div class="container-centered">
        <h1>Entities:</h1>
        <ul>
            @foreach ($entities as $entity => $url)
                <li><a href="{{ $url }}" class="card">{{ $entity }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
