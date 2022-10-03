<?php

namespace App\Http\Controllers\User;

use App\Models\Tool;
use App\Models\Renter;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $data['nikUser'] = Renter::where('user_id', Auth::user()->id)->get();
        // dd($data);
        $data['loc'] = Location::all();
        $data['tool'] = Tool::all();
        return view('user.index', $data);
    }
}
