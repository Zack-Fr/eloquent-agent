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

    public function createOrUpdateAgent(Request $request, $id = null) {
        if ($id){
            $agent = Agent::find ($id);
        } else {
            $agent = new Agent;
        }
        
        $agent->status = $request ["status"];
        $agent->role = $request ["role"];
        $agent->type = $request ["type"];
        $agent->color= $request ["color"];
        $agent->save();

        $response = [];
        $response['status'] = "success";
        $response["payload"] = $agent;
        
        return json_encode($response, 200);
    }

    public function deleteAgent(Request $request, $id = null){

    }

    
}
