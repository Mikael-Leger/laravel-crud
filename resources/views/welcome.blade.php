@extends('layouts.app')

@section('content')
    <div class="container-centered">
        <h1>Entities:</h1>
        <ul>
            @foreach ($entities as $entity => $url)
                <li>
                    <x-button onclick="window.location.href='{{ $url }}'" color="blue" size="big">{{ $entity }}</x-button>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
