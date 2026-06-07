<?php

namespace App\Http\Controllers;
use App\Models\Client;

class DashboardController extends Controller
{
    public function count(){
        $count = Client::count();
        return view('dashboard', compact('count'));
    }
}
