@props(['type' => '','onclick' => '', 'color' => 'blue'])

@php
    $colors = [
        'blue' => 'bg-blue',
        'red' => 'bg-red',
        'orange' => 'bg-orange',
        'purple' => 'bg-purple',
    ];
    $colorClass = $colors[$color] ?? 'bg-blue';
@endphp

<button {{ $attributes->merge(['onclick' => $onclick]) }} type="{{ $type }}" class="btn cursor-pointer {{ $colorClass }}">
    {{ $slot }}
</button>