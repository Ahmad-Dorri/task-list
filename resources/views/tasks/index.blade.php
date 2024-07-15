<x-layout>
    <x-heading>
        The list of tasks
    </x-heading>
    @if(count($tasks))
        <ul>
            @foreach($tasks as $task)
                <li>
                    <x-link href="{{ route('tasks.show', ['id' => $task->id]) }}">
                        {{ $task->title }}
                    </x-link>
                </li>
            @endforeach
        </ul>
    @else
        <h3>There is no task left</h3>
    @endif
    <x-button href="{{ route('tasks.create') }}">
        Create task
    </x-button>
</x-layout>
