@extends('layouts.app')

@section('content')
@livewire('utils-redirect', ['location' => '/notes'])
    <div class="container-centered">
        <h1>Create Note</h1>
        <form action="{{ route('notes.store') }}" method="POST">
        <div class="container-centered card">
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
                    <input type="checkbox" name="is_done" id="is_done" value="0" {{ old('is_done') ? 'checked' : '' }}>
                </div>
            </div>
            <div class="container-centered">
                <button type="submit" class="btn">Save</button>
            </div>
        </form>
    </div>
@endsection
