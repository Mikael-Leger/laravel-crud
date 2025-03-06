<div class="container-centered">
    <h1>Read Note</h1>
    <div class="container-centered card card-small">
        <div class="container-centered">
            <div>
                <span class="title">{{ $title }}</span>
                <span>({{ $slug }})</span>
            </div>
            <div class="container-centered-content">
                <div>{{ $content }}</div>
                <div>Deadline: @livewire('utils-date-format', ['date' => $deadline])</div>
                <div>{{ $is_done ? 'Finished' : 'Not finished' }}</div>
            </div>
        </div>
        <div class="container-centered flex-row">
            <x-button onclick="window.location.href='{{ route('notes.edit', $noteId) }}'" color="orange">Edit</x-button>
            @livewire('delete-note', ['noteId' => $noteId])
        </div>
    </div>
</div>