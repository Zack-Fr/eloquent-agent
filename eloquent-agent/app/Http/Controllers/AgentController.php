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

    public function createOrUpdateAgent(Request $request, $id = null)
    {
        if ($id) {
            $agent = Agent::find($id);
        } else {
            $agent = new Agent;
        }

        $agent->status = $request["status"];
        $agent->role = $request["role"];
        $agent->type = $request["type"];
        $agent->color = $request["color"];
        $agent->save();

        $response = [];
        $response['status'] = "success";
        $response["payload"] = $agent;

        return json_encode($response, 200);
    }

    public function deleteAgent(Request $request, $id)
    {

        $agent = Agent::find($id);

        if ($agent) {
            $agent->delete();

            return response()->json([
                'status' => 'Successfully deleted',
                'payload' => $agent
            ], 200);

        } else {
            return response()->json([
                'status' => "Failed, agent with ID {$id} doesn't exist"
            ], 404);
        }

    }

    public function getAgentByType()
    {
        $agents = Agent::where('type', 'B456')
            ->orderBy('type')
            ->limit(2)
            ->get();
        return json_encode($agents);
    }

        public function getAllTaskByAgent($id)
    {
        $agent = Agent::find($id);
        // Agent::with('tasks')->findOrFail($id);//eager method
        $tasks = $agent->tasks;
        return json_encode($tasks);
    }
}
