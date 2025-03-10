<div class="container-centered card">
    <h1>Notes List</h1>
    
    <div class="w-full h-[30px]">
        <form role="search" class="flex-row flex-gap">
            <input type="search" name="search" value="{{ $search }}" class="container w-full h-full br-5 border-1" placeholder="Write anything about your notes here...">
            <x-button type="submit" color="blue">Search</x-button>
        </form>
    </div>

    <div class="w-full border-1-solid-black br-5 overflow-scroll mt-2">
        <div class="table-header table-row bg-blue text-white font-bold p-2">
            <span class="flex-centered">Id</span>
            <span class="flex-centered">Title</span>
            <span class="flex-centered">Slug</span>
            <span class="flex-centered">Content</span>
            <span class="flex-centered">Deadline</span>
            <span class="flex-centered">Status</span>
            <span class="flex-centered">Actions</span>
        </div>

        <div class="table-content">
            @foreach ($notes as $index => $note)
                <div class="table-row p-2 border-b border-gray-300 
                            {{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-gray-200' }}">
                    <div class="contents">
                        <span class="flex-centered">{{ $note->id }}</span>
                        <span class="flex-centered text-ellipsis break-words">{{ $note->title }}</span>
                        <span class="flex-centered text-ellipsis break-words">{{ $note->slug }}</span>
                        <span class="flex-centered text-ellipsis break-words">{{ $note->content }}</span>
                        <span class="flex-centered text-ellipsis break-words">@livewire('utils-date-format', ['date' => $note->deadline])</span>
                        <span class="flex-centered text-ellipsis break-words">{{ $note->is_done ? 'Finished' : 'Not finished' }}</span>
                        <span class="flex-centered table-actions">
                            <x-button onclick="window.location.href='{{ route('notes.read', $note->id) }}'" color="purple">Read</x-button>
                            <x-button onclick="window.location.href='{{ route('notes.edit', $note->id) }}'" color="orange">Edit</x-button>
                            @livewire('delete-note', ['noteId' => $note->id])
                        </span>
                    </div>
                </div>
            @endforeach

            @if($notes->count() === 0)
                <div class="table-row p-2 border-b border-gray-300 bg-gray-100">
                    <div class="contents">
                        <span class="flex-centered col-span-7">No record. Please create your first Note below.</span>
                    </div>
                </div>
            @endif
        </div>
    </div>

    <x-button onclick="window.location.href='{{ route('notes.create')}}'" color="blue">Create</x-button>

    @if($notes->count() === 0)
    <x-button wire:click="generateData" color="blue">Lazy?</x-button>
    @endif
</div>