<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function showDashboard()
    {
        return view('admin.dashboard');
    }
}
