<?php

namespace App\Http\Controllers;
use App\Models\Client;
use App\Models\Project;
class DashboardController extends Controller
{
    public function count(){
        $count = Client::count();
        $project = Project::count();
        return view('dashboard', compact('count', 'project'));
    }
}
