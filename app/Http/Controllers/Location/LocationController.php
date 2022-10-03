<?php

namespace App\Http\Controllers\Location;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Location\LocationRequest;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['dataLokasi'] = Location::all();
        return view('location.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('location.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocationRequest $request)
    {
        // $success = Location::create([
        //     'nama_lokasi' => $request->nama_lokasi,
        //     'deskripsi' => $request->deskripsi,
        //     'latitude' => $request->latitude,
        //     'longtitude' => $request->longtitude,
        // ]);

        // if (!$success) {
        //     # code...
        //     return $request;
        // }
        return redirect(route('location'));
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
    public function edit(Location $location)
    {
        $data['location'] = $location;
        return view('location.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, LocationRequest $request)
    {
        // $location = Location::find($id);

        // $location->nama_lokasi = $request->nama_lokasi;
        // $location->deskripsi = $request->deskripsi;
        // $location->latitude = $request->latitude;
        // $location->longtitude = $request->longtitude;
        // $location->save();

        return redirect(route('location'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location  $location)
    {
        // $location->delete();
        return redirect(route('location'));
    }
}
