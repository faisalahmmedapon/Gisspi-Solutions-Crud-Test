<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:dashboard');
    }

    public function index(){
        return view('backend.dashboard.dashboard');
    }
}
