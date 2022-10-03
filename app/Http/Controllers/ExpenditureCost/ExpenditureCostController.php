<?php

namespace App\Http\Controllers\ExpenditureCost;

use App\Models\Expenditure;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Expenditure\ExpenditureRequest;

class ExpenditureCostController extends Controller
{
    public function index()
    {
        $data['pengeluaran'] = Expenditure::all();

        return view('expenditures.index', $data);
    }

    public function create()
    {
        return view('expenditures.create');
    }

    // public function store(ExpenditureCostRequest $request){
    public function store(ExpenditureRequest $request)
    {
        // Expenditure::create([
        //     'tag' => $request->tag,
        //     'tujuan' => $request->tujuan,
        //     'keterangan' => $request->keterangan,
        //     'total_biaya' => $request->total_biaya,
        // ]);

        return redirect(route('expenditure'))->with('success', 'Data berhasil disimpan');
    }

    public function edit(Expenditure $expenditure)
    {
        $data['expenditureEdit'] = $expenditure;
        return view('expenditures.edit', $data);
    }

    public function update(ExpenditureRequest $request, Expenditure $expenditure)
    {
        // $expenditure->tag = $request->tag;
        // $expenditure->tujuan = $request->tujuan;
        // $expenditure->keterangan = $request->keterangan;
        // $expenditure->total_biaya = $request->total_biaya;
        // $expenditure->save();

        return redirect(route('expenditure'))->with('success', 'Data berhasil diupdate');
    }

    public function destroy(Expenditure $expenditure)
    {
        // $expenditure->delete();
        return redirect(route('expenditure'))->with('success', 'Data berhasil dihapus');
    }
}
