<?php

declare(strict_types=1);

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    $tasks = Task::query()->latest()->simplePaginate(5);
    return view('tasks.index', compact('tasks'));
})->name('tasks.index');

Route::view('/tasks/create', 'tasks.create')->name('tasks.create');

Route::patch('/tasks/{id}', function (Request $request, $id) {
    $formData = $request->validate([
        'title' => 'required|max:255|min:3',
        'description' => 'required',
        'long_description' => '',
        'completed' => ''
    ]);

    Task::query()->find($id)->update($formData);

    return redirect()->route('tasks.show', ['task' => $id])->with('success', 'Task updated.');

})->name('tasks.update');

Route::get('/tasks/{id}/edit', function ($id) {
    $task = Task::query()->findOrFail($id);
    return view('tasks.edit', compact('task'));
})->name('tasks.edit');

Route::post('/tasks', function (Request $request) {
    $formData = $request->validate([
        'title' => ['required', 'max:255', 'min:3'],
        'description' => ['required'],
        'long_description' => []
    ]);

    Task::query()->create($formData);

    return redirect()->route('tasks.index')->with('success', 'Task created!');
})->name('tasks.store');

// route model binding
Route::get('/tasks/{task}', function (Task $task) {
    return view('tasks.show', compact('task'));
})->name('tasks.show');

Route::delete('/tasks/{task}', function (Task $task) {
   $task->delete();
   return redirect()->route('tasks.index')->with('success', 'Task deleted.');
})->name('tasks.destroy');
