<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Project;
class Task extends Model
{
    protected $fillables = [
         'project_id',
        'title',
        'priority',
        'deadline',
        'status'
    ];
     public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
