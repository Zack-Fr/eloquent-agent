<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// api/v0.1/tasks
use App\Http\Controllers\TaskController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\admin\AgentController as AgentAdminController;

    //agents
route::group(["prefix"=>"v0.1"], function(){
    Route::get('/agent', [AgentController::class, 'getAllAgents']);
    Route::get('/get_agent_by_type', [AgentController::class, 'getAgentByType']);
    Route::post('/create_update_agent/{id?}', [AgentController::class, 'createOrUpdateAgent']);
    Route::post('/delete_agent/{id}', [AgentController::class, 'deleteAgent']);
});
    //tasks
    route::group(["prefix"=>"v0.1"], function(){

    Route::get('/get_tasks', [TaskController::class, 'getAllTasks']);
    Route::post('/create_update_task/{id?}', [TaskController::class, 'createOrUpdateTask']);
    Route::get('/get_tasks_by_agent/{id}', [TaskController::class, 'getAllTaskByAgent']);
    });
        
    //admin
    route::group(["prefix"=>"admin"], function(){
    Route::get('/remove_agent', [AgentAdminController::class, 'getAllAgents']);
    
    });    