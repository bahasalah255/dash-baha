<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class Client extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'notes'
    ];
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
