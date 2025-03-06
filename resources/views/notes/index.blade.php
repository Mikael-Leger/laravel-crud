@extends('layouts.app')

@section('content')
    <div class="container flex-col flex-gap">
        <x-button onclick="window.location.href='/'" color="blue" size="big">Back</x-button>
        <div class="container-centered card">
            <h1>Notes List</h1>
            <div class="w-full border-1-solid-black br-5 overflow-hidden">
                <div class="table-row bg-blue text-white font-bold p-2">
                    <span class="flex-centered">Id</span>
                    <span class="flex-centered">Title</span>
                    <span class="flex-centered">Slug</span>
                    <span class="flex-centered">Content</span>
                    <span class="flex-centered">Deadline</span>
                    <span class="flex-centered">Status</span>
                    <span class="flex-centered">Actions</span>
                </div>

                @foreach ($notes as $index => $note)
                    <div class="table-row p-2 border-b border-gray-300 
                                {{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-gray-200' }}">
                        <div class="contents">
                            <span class="flex-centered">{{ $note->id }}</span>
                            <span class="flex-centered">{{ $note->title }}</span>
                            <span class="flex-centered">{{ $note->slug }}</span>
                            <span class="flex-centered truncate">{{ $note->content }}</span>
                            <span class="flex-centered">@livewire('utils-date-format', ['date' => $note->deadline])</span>
                            <span class="flex-centered">{{ $note->is_done ? 'Finished' : 'Not finished' }}</span>
                            <span class="flex-centered">
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
                            <span class="flex-centered col-span-7 block">No record. Please create your first Note below.</span>
                        </div>
                    </div>
                @endif
            </div>
            <x-button onclick="window.location.href='{{ route('notes.create')}}'" color="blue">Create</x-button>
        </div>
    </div>
@endsection
