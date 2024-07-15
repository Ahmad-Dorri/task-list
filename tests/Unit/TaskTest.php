<?php

namespace Tests\Unit;

use App\Models\Task;
use PHPUnit\Framework\TestCase;

class TaskTest extends TestCase
{
    public function test_task_has_name()
    {
        $task = Task::factory()->create();
        $this->assertNotEmpty($task->name);
    }
}
