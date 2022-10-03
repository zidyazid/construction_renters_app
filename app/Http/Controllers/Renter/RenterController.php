<?php

namespace App\Http\Controllers\Renter;

use App\Models\User;
use App\Models\Renter;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Http\Requests\Renter\RenterRequest;

class RenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['renterData'] = Renter::all();
        return view('renters.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.user_registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RenterRequest $request)
    {

        // dd(Hash::make($request->password));

        $renter = Renter::create([
            'nama_perusahaan' => $request->nama_perusahaan,
            'alamat' => $request->alamat,
            'nama_penyewa' => $request->nama_penyewa,
            'alamat_penyewa' => $request->alamat_penyewa,
            'nik' => $request->nik,
            'pekerjaan' => $request->pekerjaan,
            'status' => 'Pihak Penyewa',
        ]);

        if (!$renter) {
            return 'failed to save data';
        }

        // membuat akun dari data renter
        $user = User::create([
            'name' => $request->nama_penyewa,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => 0
        ]);

        if (!$user) {
            return 'echo registration failed';
        }

        return redirect(route('login'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
