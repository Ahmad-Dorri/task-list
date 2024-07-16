<x-layout>
    <x-heading>
        {{ $task->title }}
    </x-heading>
    <p>
        {{ $task->description }}
    </p>
    @isset($task->long_description)
        <p>
            {{ $task->long_description }}
        </p>
    @endisset
    <p>
        {{ $task->created_at }}
    </p>
    <p>
        {{ $task->updated_at }}
    </p>
    <div class="flex gap-4 my-2" >
        <form method="POST" action="{{ route('tasks.destroy', $task) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-error">
                delete the task
            </button>
        </form>
        <a class="btn btn-accent" href="{{ route('tasks.edit', ['id' => $task->id]) }}">
            edit this task
        </a>
    </div>
    <div>
        <x-link href="{{ route('tasks.index') }}">
            Go Back ...
        </x-link>
    </div>
</x-layout>
