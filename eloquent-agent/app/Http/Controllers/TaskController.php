<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Agent;

class TaskController extends Controller
{
    public function getAllTasks()
    {
        $tasks = Task::all();
        $response = [];
        $response['status'] = "success";
        $response["payload"] = $tasks;

        return response()->json($response);
    }
    public function createOrUpdateTask(Request $request, $id = null)
    {
        if ($id) {
            $task = Task::find($id);
        } else {
            $task = new Task;
        }

        $task->agent_id = 0;
        $task->name = $request["name"];
        $task->save();

        $response = [];
        $response['status'] = "success";
        $response["payload"] = $task;

        return json_encode($response, 200);
    }
    public function getAllTaskByAgent($id)
    {
        $agent = Agent::find($id);
        // Agent::with('tasks')->findOrFail($id);//eager method
        $tasks = $agent->tasks;
        return json_encode($tasks);
    }
}
