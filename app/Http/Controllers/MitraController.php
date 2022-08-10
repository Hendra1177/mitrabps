<?php

namespace App\Http\Controllers;
use App\Models\Mitra;

use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_mitra = \App\Models\Mitra::where('nama_mitra', 'LIKE', '%'.$request->cari. '%')->get();
        }else{
            $data_mitra = \App\Models\Mitra::all();
        }
        
        return view('admin.mitraindex', ['data_mitra' => $data_mitra]);
    }

    public function create(Request $request)
    {
        \App\Models\Mitra::create($request->all());
        return redirect('/admin/mitra')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $mitra = \App\Models\Mitra::find($id);
        return view('admin/mitraedit', ['mitra' => $mitra]);
    }

    public function update(Request $request, $id)
    {
        $mitra = \App\Models\Mitra::find($id);
        $mitra->update($request->all());
        return redirect('/admin/mitra')->with('sukses', 'Data berhasil diupdate');
    }  

    public function delete($id)
    {
        $mitra = \App\Models\Mitra::find($id);
        $mitra->delete($mitra);
        return redirect('/admin/mitra')->with('sukses', 'Data berhasil dihapus');
    }

    //User
    public function createMitra(Request $request)
    {
        \App\Models\Mitra::create($request->all());
        return redirect('/tambahmitra')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function detail()
    {
        return view('Admin.detailmitra');
    }
}
