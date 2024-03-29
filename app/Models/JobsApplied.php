<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobsApplied extends Model
{
    use HasFactory;
    function jobs(){
        return $this->belongsTo(Jobs::class,'job_id','id');
    }
}
