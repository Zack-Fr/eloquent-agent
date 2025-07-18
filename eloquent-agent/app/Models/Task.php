<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function agent(){
        return $this->belongsTo(Agent::class);
    }
}
