<?php

namespace App\Http\Controllers\Transaction;

use App\Models\Tool;
use App\Models\Renter;
use App\Models\Location;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Transaction\TransactionRequest;

class TransactionController extends Controller
{
    public function index($nik, Tool $tool)
    {
        $data['nik'] = $nik;
        $data['loc'] = Location::all();
        $data['tool'] = Tool::all();
        return view('transaction.index', $data);
    }

    public function store(TransactionRequest $request)
    {
        $total_biaya = (($request->lama_penyewaan * 24) * 100000) + 500000;

        // ambil data berdasarkan $request->id
        $toolById = Tool::find($request->id_tool);

        // hitung total berdasarkan tipe dari data yang baru diambil       
        $total = Tool::where('tipe', $toolById->tipe)->count();
        // kurangi total berdasarkan jumlah yang disewa
        $jumlahUnitSewa = $toolById->jumlah_ketersedian - 1;
        // gunakan $jumlahUnitSewa sebagai sisa alat yang tersedia [update jumlah tool dengan type yang sama]   
        // 1 pada jumlahUnitSewa merupakan jumlah unit yang dapat disewa oleh pihak penyewa

        // ambil data lokasi
        $loc = Location::find($request->loc_id);

        // get data renter where nik => $request->nik
        $penyewa = Renter::where('nik', $request->nik)->get();
        // dd($penyewa[0]["id"]);
        $data['penyewa'] = $penyewa[0]["id"];

        /**
         * keterangan :
         * nilai 24 diambil dari 24 jam dalam 1 hari dikarenakan lama penyewaan akan tetap dihitung 24 jam meskipun
         * tidak mencapai 24 jam
         * 1000000 sebagai harga sewa satu unit
         * 500000 sebagai biaya mobilisasi
         */

        //  simpan data penyewaan
        // $transaction = Transaction::create([
        //     'renter_id' => $penyewa[0]["id"],
        //     'tool_id' => $request->id_tool,
        //     'lama_penyewaan' => $request->lama_penyewaan,
        //     'total_biaya' => $total_biaya,
        //     'status_penggunaan' => 1,
        //     'latitude' => $loc->latitude,
        //     'longtitude' => $loc->longtitude,
        // ]);

        // if (!$transaction) {
        # code...
        // return redirect(route('transaction.index'));
        // } else {
        // upate data jumlah tool yang disewa
        // $toolById->jumlah_ketersedian = $jumlahUnitSewa;
        // $toolById->save();

        // return redirect(route('success.transaction', $penyewa[0]["id"]));
        return redirect(route('success.transaction', $penyewa[0]["id"]));
        // }
    }

    public function successTransaction($id)
    {
        $data['renter_id'] = Renter::find($id);
        // dd($data['renter_id']->id);
        return view('success_transaction', $data);
    }

    public function changeStatus(Transaction $transaction)
    {
        $transaction->status_penggunaan = 0;
        $transaction->save();
        return redirect(route('tool'))->with('success', 'Data Berhasil Dirubah');
    }
}
