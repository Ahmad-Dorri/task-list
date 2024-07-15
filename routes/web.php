<?php

declare(strict_types=1);

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('tasks.index');
});

Route::get('/tasks', function () {
    $tasks = Task::query()->latest()->get();
    return view('tasks.index', compact('tasks'));
})->name('tasks.index');

Route::view('/tasks/create', 'tasks.create')->name('tasks.create');

Route::post('/tasks', function (Request $request) {
    $attributes = $request->validate([
        'title' => ['required', 'max:255'],
        'description' => ['required'],
    ]);

    Task::query()->create($attributes);

    return redirect()->route('tasks.index');
})->name('tasks.store');

Route::get('/tasks/{id}', function ($id) {
    $task = Task::query()->findOrFail($id);
    return view('tasks.show', compact('task'));
})->name('tasks.show');


