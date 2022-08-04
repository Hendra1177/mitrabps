<?php

namespace App\Http\Controllers;
use App\Models\KegiatanMitra;

use Illuminate\Http\Request;

class KegiatanMitraController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_kegiatan = \App\Models\KegiatanMitra::where('nama_kegiatan', 'LIKE', '%'.$request->cari. '%')->get();
        }else{
            $data_kegiatan = \App\Models\KegiatanMitra::all();
        }
        
        return view('admin.kegiatanmitraindex', ['data_kegiatan' => $data_kegiatan]);
    }

    public function create(Request $request)
    {
        \App\Models\KegiatanMitra::create($request->all());
        return redirect('/admin/kegiatanmitra')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kegiatan = \App\Models\KegiatanMitra::find($id);
        return view('admin/kegiatanmitraedit', ['kegiatan' => $kegiatan]);
    }

    public function update(Request $request, $id)
    {
        $kegiatan = \App\Models\KegiatanMitra::find($id);
        $kegiatan->update($request->all());
        return redirect('/admin/kegiatanmitra')->with('sukses', 'Data berhasil diupdate');
    }  

    public function delete($id)
    {
        $kegiatan = \App\Models\KegiatanMitra::find($id);
        $kegiatan->delete($kegiatan);
        return redirect('/admin/kegiatanmitra')->with('sukses', 'Data berhasil dihapus');
    }

    // Method User
    public function createKegiatanMitra(Request $request)
    {
        \App\Models\KegiatanMitra::create($request->all());
        return redirect('/mitra')->with('sukses', 'Data berhasil ditambahkan');
    }
}
