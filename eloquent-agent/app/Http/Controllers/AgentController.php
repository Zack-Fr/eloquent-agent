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
}
