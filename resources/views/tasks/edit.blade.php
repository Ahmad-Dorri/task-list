<x-layout>
    <div class="mt-16">
        <x-heading class="mb-4">Edit your task</x-heading>
        <form class="form-control gap-4" method="post" action="{{ route('tasks.update', ['id' => $task->id]) }}">
            @csrf
            @method('PATCH')
            <label for="title">Title</label>
            <input placeholder="Go Shopping"
                   class="input bg-accent-content/20 rounded-md"
                   type="text" name="title" id="title" required
                   value="{{ $task->title }}"
            />
            <x-form.error name="title"/>
            <label for="description">description</label>
            <textarea
                rows="5"
                class="textarea bg-accent-content/20 rounded-md"
                name="description" id="description" required>{{$task->description}}</textarea>
            <x-form.error name="description"/>
            <label for="long_description">Long Description</label>
            <textarea
                rows="10"
                class="textarea bg-accent-content/20 rounded-md"
                name="long_description" id="long_description">{{$task->long_description}}</textarea>
            <label for="completed">
                Is completed
            </label>
            <input class="checkbox checkbox-primary" type="checkbox" id="completed" name="completed"
                   value="{{ true }}"/>

            <button class="btn btn-primary w-1/2 mx-auto" type="submit">
                Edit
            </button>
        </form>
    </div>
</x-layout>
