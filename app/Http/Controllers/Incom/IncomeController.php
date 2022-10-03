<?php

namespace App\Http\Controllers\Incom;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class IncomeController extends Controller
{
    public function daily_income()
    {
        $data['transaksi'] = DB::select('SELECT Date(transactions.created_at) as transactions_date, 
        transactions.total_biaya as totalBiayaTransaksiHarian, 
        expenditures.total_biaya as totalPengeluaranHarian,
        Date(expenditures.created_at) as expenditures_date 
        from transactions join expenditures 
        on Date(transactions.created_at) = Date(expenditures.created_at) 
        order by expenditures.created_at');

        $data['totalTransaksiHarian'] = DB::select('SELECT SUM(`total_biaya`) AS total_biaya, transactions.created_at AS tanggal FROM transactions GROUP BY DATE(`created_at`)');
        // dd(($data['totalTransaksiHarian']));
        $data['totalPengeluaranHarian'] = DB::select('SELECT SUM(`total_biaya`) AS total_biaya, expenditures.created_at AS tanggal, tujuan, keterangan FROM expenditures GROUP BY DATE(`created_at`)');

        return view('income.index', $data);
    }
}
