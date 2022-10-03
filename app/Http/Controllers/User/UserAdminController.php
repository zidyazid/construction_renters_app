<?php

namespace App\Http\Controllers\User;

use App\Models\Tool;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserAdminController extends Controller
{
    public function index()
    {
        $data['tools'] = Tool::all();

        return view('Admin.dashboard', $data);
    }
}
