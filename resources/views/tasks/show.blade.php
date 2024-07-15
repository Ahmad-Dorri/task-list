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
    <a class="btn btn-accent" href="{{ route('tasks.edit', ['id' => $task->id]) }}" >
        edit this task
    </a>
    <div>
        <x-link href="{{ route('tasks.index') }}" >
            Go Back ...
        </x-link>
    </div>
</x-layout>
