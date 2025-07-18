<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use App\Services\TaskService;



class TaskController extends Controller
{
    public function getAllTasks()
    {
        $tasks = TaskService::getAllTasks();
        return $this->responseJSON($tasks);
    }


    public function createOrUpdateTask(Request $request, $id = null)
    {
        $task = new Task;
        if($id){
                $task = TaskService::getAllTasks($id);
        }
        $tasks = TaskService::createOrUpdateTask($request, $task);
        return $this->responseJSON($tasks);

    }
}