<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Client;
use App\Models\Payment;
use App\Models\Task;
class Project extends Model
{
    protected $fillable = [
        'client_id',
        'title',
        'description',
        'stack',
        'budget',
        'deadline',
        'status'
    ];
    public function client(){
        return $this->belongTo(Client::class);
    }
    public function payments(){
        return $this->hasMany(Payment::class);
    }
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
