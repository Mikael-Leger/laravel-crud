@props(['type' => '','onclick' => '', 'color' => 'blue', 'size' => 'small'])

@php
    $colors = [
        'blue' => 'bg-blue',
        'red' => 'bg-red',
        'orange' => 'bg-orange',
        'purple' => 'bg-purple',
    ];
    $colorClass = $colors[$color] ?? 'bg-blue';
@endphp

<button {{ $attributes->merge(['onclick' => $onclick]) }} type="{{ $type }}" class="btn cursor-pointer {{ $colorClass }} {{ $size === 'small' ? 'text-[14px]' : 'text-[24px]' }}">
    {{ $slot }}
</button>