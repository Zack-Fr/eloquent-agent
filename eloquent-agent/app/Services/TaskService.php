<?php
namespace App\Services;
use App\Models\Task;

class TaskService
{

    public static function getAllTasks($id = null)
    {
        if (!$id) {
            return Task::all();
        }
        return Task::find($id);
    }

    public static function createOrUpdateTask($data, $task)
    {
        $task->agent_id = 1;
        $task->name = $data["name"];
        $task->save();
        return $task;
    }
}