<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardContoller extends Controller
{
    //Dashboard
    public function dashboard() {
      return view('admin.dashboard');
    }
}
