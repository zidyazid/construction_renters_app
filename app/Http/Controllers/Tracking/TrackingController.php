<?php

namespace App\Http\Controllers\Tracking;

use App\Models\Tool;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TrackingController extends Controller
{
    public function index($id)
    {
        $kordinat = Transaction::find($id);
        // dd($kordinat->latitude);
        $data['latlong'] = [-8.5830695, 116.3202515];
        // $data['latlong'] = [$kordinat->latitude, $kordinat->longtitude];
        return view('tracking.index', $data);
    }
}
