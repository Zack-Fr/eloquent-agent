<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    public function getAllAgents()
    {   
        $agents = Agent::all();
        $response = [];
        $response['status'] = "success";
        $response["payload"] = $agents;

        return response()->json($response);
    }

    public function createAgent() {
        $agent = new Agent;
        $agent->status = "active";
        $agent->role = "operator";
        $agent->type = "B456";
        $agent->color= "Platinum";
        $agent->save();

        $response = [];
        $response['status'] = "success";
        $response["payload"] = $agent;

        return response()->json($response);
    }
}
