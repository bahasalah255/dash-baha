<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use app\Models\Project;
class Payment extends Model
{
    protected $fillable = [
        'project_id',
        'amount',
        'payment_date',
        'status',
        'note'
    ];
    public function project(){
        return $this->belongTo(Project::class);
    }
}
