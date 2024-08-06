<?php

namespace App\Http\Controllers;

use App\Models\Monitoring; 
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class MonitoringController extends Controller
{
    public function index(): View
    {
        $monitoring = Monitoring::orderBy('id', 'desc')->limit(10)->offset(0)->get();
        return view('monitoring', ['monitoring' => $monitoring]);
    }
}