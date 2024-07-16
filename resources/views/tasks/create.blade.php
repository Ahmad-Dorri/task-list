<x-layout>
    <div class="mt-16">
        <x-heading class="mb-4">Create new task</x-heading>
        <form class="form-control gap-4" method="post" action="{{ route('tasks.store') }}">
            @csrf
            <label for="title">Title</label>
            <input placeholder="Go Shopping"
                   value="{{ old('title') }}"
                   class="input bg-accent-content/20 rounded-md"
                   type="text" name="title" id="title" required
            />
            <x-form.error name="title"/>
            <label for="description">description</label>
            <textarea
                rows="5"
                class="textarea bg-accent-content/20 rounded-md"
                name="description" id="description" required>{{ old('description') }}</textarea>
            <x-form.error name="description" />
            <label for="long_description">Long Description</label>
            <textarea
                rows="10"
                class="textarea bg-accent-content/20 rounded-md"
                name="long_description" id="long_description">{{ old('long_description') }}</textarea>
            <x-form.error name="long_description" />
            <button class="btn btn-primary w-1/2 mx-auto" type="submit">
                create
            </button>
        </form>
    </div>
</x-layout>
