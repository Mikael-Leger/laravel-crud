<div class="container-centered">
    <h1>Update Note</h1>
    <div class="container-centered card card-small">
        <form wire:submit.prevent="editNote">
            @csrf
            <div class="container-centered">
                @foreach([
                    ['name' => 'title', 'label' => 'Title', 'value' => $title, 'type' => 'text', 'required' => true],
                    ['name' => 'slug', 'label' => 'Slug', 'value' => $slug, 'type' => 'text', 'required' => true],
                    ['name' => 'content', 'label' => 'Content', 'value' => $content, 'type' => 'textarea', 'required' => true],
                    ['name' => 'deadline', 'label' => 'Deadline', 'value' => $deadline, 'type' => 'date', 'required' => false],
                    ['name' => 'is_done', 'label' => 'Is Finished?', 'value' => $is_done, 'type' => 'checkbox', 'required' => false],
                ] as $field)
                    <x-field name="{{ $field['name'] }}" label="{{ $field['label'] }}" value="{{ $field['value'] }}" type="{{ $field['type'] }}" required="{{ $field['required'] }}"/>
                @endforeach
            </div>
            <div class="container-centered flex-row">
                <x-button type="submit" color="blue">Save</x-button>
            </div>
        </form>
    </div>
</div>