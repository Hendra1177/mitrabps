<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SpkController extends Controller
{
    public function index (Request $request)
    {
        $data_kegiatan = \App\Models\Kegiatan::all();
        return view('admin.spkindex', ['data_kegiatan' => $data_kegiatan]);
    }
}
