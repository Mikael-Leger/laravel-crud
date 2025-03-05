@extends('layouts.app')

@section('content')
@livewire('utils-redirect', ['location' => '/notes'])
    <div class="container-centered">
        <h1>Create Note</h1>
        <form action="{{ route('notes.update', $note->id) }}" method="POST">
        <div class="container-centered-content card">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $note->title) }}" required>
            </div>
            <div>
                <label for="slug">Slug</label>
                <input type="text" name="slug" id="slug" value="{{ old('slug', $note->slug) }}" required>
            </div>
            <div>
                <label for="content">Content</label>
                <textarea name="content" id="content" required>{{ old('content', $note->content) }}</textarea>
            </div>
            <div>
                <label for="deadline">Deadline</label>
                <input type="date" name="deadline" id="deadline" value="{{ old('deadline', $note->deadline) }}">
            </div>
            <div>
                <label for="is_done">Is finished?</label>
                <input type="checkbox" name="is_done" id="is_done" {{ $note->is_done ? 'checked' : '' }}>
            </div>
            <div class="container-centered">
                <button type="submit">Update</button>
            </div>
        </form>
    </div>
@endsection
