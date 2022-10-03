<?php

namespace App\Http\Controllers\AllPdf;

use App\Models\Renter;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;

class PdfController extends Controller
{
    public function suratPernyataan(Renter $renter)
    {
        $data['dataRenter'] = $renter;
        // dd($data['dataRenter']);
        Pdf::setOption(['dpi' => 1, 'defaultFont' => 'times-new-roman']);
        $pdf = Pdf::loadview('renters/pdf', $data);

        return $pdf->stream();
    }
}
