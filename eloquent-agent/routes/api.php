<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// api/v0.1/tasks
use App\Http\Controllers\AgentController;
use App\Http\Controllers\admin\AgentController as AgentAdminController;

route::group(["prefix"=>"v0.1"], function(){
    Route::get('/agent', [AgentController::class, 'getAllAgents']);
    Route::post('/create_agent/{id?}', [AgentController::class, 'createAgent']);
});

    route::group(["prefix"=>"admin"], function(){
    Route::get('/remove_agent', [AgentAdminController::class, 'getAllAgents']);
    
    });    