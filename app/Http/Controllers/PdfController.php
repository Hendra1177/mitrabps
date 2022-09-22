<?php

namespace App\Http\Controllers;

use App\Models\Spk;
use PDF;

class PdfController extends Controller
{
    public function cetakPdf($id)
    {
        $spk = Spk::find($id);
        $pdf =PDF::loadview('spk.spk_pdf',['spk'=>$spk]);
        return $pdf->stream();
    }
}