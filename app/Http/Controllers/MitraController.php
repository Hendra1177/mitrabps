<?php

namespace App\Http\Controllers;
use App\Models\Mitra;
use App\Models\Kegiatan;
use App\Models\KegiatanMitra;

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
        $this->validate($request,[
            'nama_mitra' => 'required|unique:mitra,nama_mitra',
            'pekerjaan' => 'required',
            'alamat' => 'required',
            'desa' => 'required',
            'kecamatan' => 'required',
            'no_hp' => 'required|unique:mitra,no_hp',
            'rekening_bri' => 'required|unique:mitra,rekening_bri',
        ]);

        \App\Models\Mitra::create($request->all());
        if($this){
            return redirect('/admin/mitra')->with('sukses', 'Data berhasil ditambahkan');
            
        }else{
            return redirect('/admin/mitra/formmitra')->with('sukses', 'Data gagal ditambahkan');
        }
    }

    public function toCreate()
    {
        return view('admin.mitracreate');
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

    

    public function detail(Request $request, $id)
    {
        $data_kegiatan = KegiatanMitra::join('kegiatan', 'kegiatan.id', '=', 'kegiatan_mitra.kegiatan_id')
            ->join('mitra', 'mitra.id', '=', 'kegiatan_mitra.mitra_id')
            ->get(['kegiatan.nama_kegiatan', 'kegiatan.bulan', 'kegiatan.tanggal_mulai', 'kegiatan.tanggal_akhir', 'kegiatan.volume_total', 'kegiatan.satuan', 'kegiatan.harga_satuan', 'mitra.nama_mitra', 'kegiatan_mitra.nilai_perjanjian', 'kegiatan_mitra.id']);
            $mitra = \App\Models\Mitra::find($id);
            return view('admin.detailmitra', ['mitra' => $mitra]);
            $kegiatan_mitra = \App\Models\KegiatanMitra::find($id);
            return view('admin.detailmitra', ['kegiatan_mitra' => $kegiatan_mitra]);


        return view('admin.detailmitra', ['data_kegiatan' => $data_kegiatan]);
        // dd($data_kegiatan);
    }
}
