<?php

namespace App\Http\Controllers;
use App\Models\Kegiatan;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_kegiatan = \App\Models\Kegiatan::where('nama_kegiatan', 'LIKE', '%'.$request->cari. '%')->get();
        }else{
            $data_kegiatan = \App\Models\Kegiatan::all();
        }
        
        return view('admin.kegiatanindex', ['data_kegiatan' => $data_kegiatan]);
    }

    public function create(Request $request)
    {
        \App\Models\Kegiatan::create($request->all());
        return redirect('/admin/kegiatan')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kegiatan = \App\Models\Kegiatan::find($id);
        return view('admin/kegiatanedit', ['kegiatan' => $kegiatan]);
    }

    public function update(Request $request, $id)
    {
        $kegiatan = \App\Models\Kegiatan::find($id);
        $kegiatan->update($request->all());
        return redirect('/admin/kegiatan')->with('sukses', 'Data berhasil diupdate');
    }  

    public function delete($id)
    {
        $kegiatan = \App\Models\Kegiatan::find($id);
        $kegiatan->delete($kegiatan);
        return redirect('/admin/kegiatan')->with('sukses', 'Data berhasil dihapus');
    }

    // Method User
    
    public function createKegiatan(Request $request)
    {
        \App\Models\Kegiatan::create($request->all());
        return redirect('/tambahkegiatan')->with('sukses', 'Data berhasil ditambahkan');
    }
}
