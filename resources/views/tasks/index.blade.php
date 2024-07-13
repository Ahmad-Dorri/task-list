<x-layout>
    <h1>The list of tasks</h1>
    @if(count($tasks))
        <ul>
            @foreach($tasks as $task)
                <li>
                    <a href="{{ route('tasks.show', ['id' => $task->id]) }}" >
                        {{ $task->title }}
                    </a>
                </li>
            @endforeach
        </ul>
    @else
        <h3>There is no task left</h3>
    @endif
</x-layout>
