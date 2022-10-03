<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->is_admin) {
            # code...
            return redirect(route('admin.dashboard'));
        }
        return redirect(route('user.dashboard'));
    }
}
