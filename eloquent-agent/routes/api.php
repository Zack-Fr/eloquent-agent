<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AgentController;

Route::get('/agent', [AgentController::class, 'getAllAgents']);
Route::get('/create_agent', [AgentController::class, 'createAgent']);