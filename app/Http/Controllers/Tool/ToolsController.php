<?php

namespace App\Http\Controllers\Tool;

use App\Models\Tool;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Tool\ToolRequest;

class ToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data['dataTool'] = Transaction::with(['tool', 'renter'])->get();

        // dd($data);

        // $data['toolsInUse'] = Transaction::join('tools', 'transactions.tool_id', '=', 'tools.id')
        //     ->join('renters', 'transactions.renter_id', '=', 'renters.nik')
        //     ->get(['transactions.*', 'tools.nama_alat', 'renters.*']);


        $data['tools'] = Tool::all();
        return view('tools.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tools.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ToolRequest $request)
    {
        // $file_name = $request->file('file');

        // $saving_path = 'image_upload';

        // $file_name->move($saving_path, $file_name->getClientOriginalName());

        // $data = [
        //     'nama_alat' => $request->nama_alat,
        //     'tipe' => $request->tipe,
        //     'status' => 'Stand By',
        //     'kondisi' => $request->kondisi,
        //     'jumlah_ketersedian' => $request->jumlah_ketersedian,
        //     'gambar' => $file_name->getClientOriginalName(),
        // ];

        // Tool::create($data);

        return redirect(route('tool'));
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
    public function edit(Tool $tool)
    {
        $data['toolsToUpdate'] = $tool;
        return view('tools.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ToolRequest $request, Tool $tool)
    {
        // dd($tool);

        // $file_name = $request->file('file');

        // $image_name = $file_name->getClientOriginalName();

        // $saving_path = 'image_upload';

        // $file_name->move($saving_path, $file_name->getClientOriginalName());

        // $tool->nama_alat = $request->nama_alat;
        // $tool->tipe = $request->tipe;
        // $tool->kondisi = $request->kondisi;
        // $tool->jumlah_ketersedian = $request->jumlah_ketersedian;
        // $tool->gambar = $image_name;
        // $tool->save();

        return redirect(route('tool'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tool $tool)
    {
        // $tool->delete();
        return redirect(route('tool'));
    }

    public function changeStatus(Tool $tool)
    {
        return $tool;
    }
}
