@props(['name' => '', 'label' => '', '' => '', 'type' => 'text', 'value' => null, 'required' => false])

<div class="{{ $type === 'checkbox' ? 'flex-row' : 'flex-col' }}">
    <label for="{{ $name }}" class="block">{{ $label }}</label>

    @if($type == 'textarea')
        <textarea wire:model.defer="{{ $name }}" id="{{ $name }}" class="input resize-none" {{ $required ? 'required' : '' }} re>{{ $value }}</textarea>
    @elseif($type == 'checkbox')
        <input wire:model.defer="{{ $name }}" type="checkbox" id="{{ $name }}" class="input" {{ $value ? 'checked' : '' }}>
    @else
        <input wire:model.defer="{{ $name }}" type="{{ $type }}" id="{{ $name }}" class="input" value="{{ $value }}" {{ $required ? 'required' : '' }}>
    @endif

    @error($name)
        <span class="text-red-500">{{ $message }}</span>
    @enderror
</div>