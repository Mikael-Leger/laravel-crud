@extends('layouts.app')

@section('content')
    <button onclick="window.location.href='/notes'">Back</button>
    <h1>Create Note</h1>
    <form action="{{ route('notes.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" required>
        </div>
        <div>
            <label for="slug">Slug</label>
            <input type="text" name="slug" id="slug" required>
        </div>
        <div>
            <label for="content">Content</label>
            <textarea name="content" id="content" required></textarea>
        </div>
        <div>
            <label for="deadline">Deadline</label>
            <input type="date" name="deadline" id="deadline">
        </div>
        <div>
            <label for="is_done">Is finished?</label>
            <input type="hidden" name="is_done" value="0">
            <input type="checkbox" name="is_done" id="is_done" value="1" {{ old('is_done') ? 'checked' : '' }}>
        </div>
        <button type="submit">Save</button>
    </form>
@endsection
