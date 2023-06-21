<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboradController extends Controller
{
    public function master()
    {
        return view('backend.master');
    }

    public function dashboard()
    {
        return view('backend.dashboard');
    }
}
