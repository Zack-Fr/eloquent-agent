<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{   
    protected $fillable = [
        'name',
        'agent_id',
    ];
    public function agent(){
        return $this->belongsTo(Agent::class);
    }
}
