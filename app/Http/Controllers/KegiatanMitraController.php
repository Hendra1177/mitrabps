<?php

namespace App\Http\Controllers;

use App\Models\KegiatanMitra;
use App\Models\Kegiatan;
use App\Models\Mitra;
use Illuminate\Support\Facades\DB;

// use\App\Models\KegiatanMitra;

use Illuminate\Http\Request;

class KegiatanMitraController extends Controller
{
    public function index(Request $request)
    {
        // $data = Kegiatan::join('mitra','mitra.id', '=', 'kegiatan.id')
        //     ->join('kegiatan_mitra', 'kegiatan_mitra.kegiatan_id', '=', '')
        if ($request->has('cari')) {
            $data_kegiatan = \App\Models\Kegiatan::where('nama_kegiatan', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_kegiatan = \App\Models\Kegiatan::all();
        }

        return view('admin.kegiatanmitraindex', ['data_kegiatan' => $data_kegiatan]);
    }

    public function create(Request $request)
    {
        KegiatanMitra::create($request->all());
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



    public function joinKegiatan(Request $request)
    {
        $data_kegiatan = KegiatanMitra::join('kegiatan', 'kegiatan.id', '=', 'kegiatan_mitra.kegiatan_id')
            ->join('mitra', 'mitra.id', '=', 'kegiatan_mitra.mitra_id')
            ->get(['kegiatan.nama_kegiatan', 'kegiatan.bulan', 'kegiatan.tanggal_mulai', 'kegiatan.tanggal_akhir', 'kegiatan.volume_total', 'kegiatan.satuan', 'kegiatan.harga_satuan', 'kegiatan_mitra.nilai_perjanjian', 'kegiatan_mitra.id', 'kegiatan.beban_anggaran']);


        return view('admin.kegiatanmitraindex', ['data_kegiatan' => $data_kegiatan]);
        // dd($data_kegiatan);
    }

    public function datalistPelaksana()
    {
        $kegiatan = Kegiatan::orderBy('nama_kegiatan', 'asc')->get();
        $mitra = Mitra::orderBy('nama_mitra', 'asc')->get();

        $kegiatan_mitra = KegiatanMitra::all();
        return view('Kemitraan.mitra', ['kegiatan' => $kegiatan, 'mitra' => $mitra, 'kegiatan_mitra' => $kegiatan_mitra]);
    }

    //User
    public function userjoinKegiatan(Request $request)
    {
        $data_kegiatan = KegiatanMitra::join('kegiatan', 'kegiatan.id', '=', 'kegiatan_mitra.kegiatan_id')
            ->join('mitra', 'mitra.id', '=', 'kegiatan_mitra.mitra_id')
            ->get(['kegiatan.nama_kegiatan', 'kegiatan.bulan', 'kegiatan.tanggal_mulai', 'kegiatan.tanggal_akhir', 'kegiatan.volume_total', 'kegiatan.satuan', 'kegiatan.harga_satuan', 'mitra.nama_mitra', 'kegiatan_mitra.nilai_perjanjian', 'kegiatan_mitra.id']);


        return view('Kemitraan.kegiatanmitra', ['data_kegiatan' => $data_kegiatan]);
        // dd($data_kegiatan);
    }

    public function createKegiatan(Request $request)
    {
        // $kegiatan = Kegiatan::create([
        //     'nama_kegiatan' => $request->nama_kegiatan,
        //     'bulan' => $request->bulan,
        //     'tanggal_mulai' => $request->tanggal_mulai,
        //     'tanggal_akhir' => $request->tanggal_akhir,
        //     'beban_anggaran' => $request->beban_anggaran,
        //     'volume_total' => $request->volume_total,
        //     'satuan' => $request->satuan,
        //     'harga_satuan' => $request->harga_satuan,
        // ]);
        // $mitra = Mitra::create([
        //     'nama_mitra' => $request->nama_mitra,
        //     'pekerjaan' => $request->pekerjaan,
        //     'alamat' => $request->alamat,
        //     'desa' => $request->desa,
        //     'kecamatan' => $request->kecamatan,
        //     'no_hp' => $request->no_hp,
        //     'rekening_bri' => $request->rekening_bri,
        // ]);



        $kegiatan_nama = Kegiatan::where('nama_kegiatan', $request->kegiatan_id)->value('id');
        $mitra_nama = Mitra::where('nama_mitra', $request->mitra_id)->value('id');
        
        $request->validate([
            'kegiatan_id' => 'required',
            'mitra_id' => 'required',
            'nilai_perjanjian' => 'required',
            'target' => 'required',
        ]);

        $kegiatanmitra = new KegiatanMitra;
        $kegiatanmitra->kegiatan_id = $kegiatan_nama;
        $kegiatanmitra->mitra_id = $mitra_nama;
        $kegiatanmitra->nilai_perjanjian = $request->nilai_perjanjian;
        $kegiatanmitra->target = $request->target;
        $kegiatanmitra->save();

        // $kegiatanmitra = KegiatanMitra::create([
        //     'kegiatan_id' => $request->kegiatan()->id,
        //     'mitra_id' => $request->mitra()->id,
        //     'nilai_perjanjian' => $request->nilai_perjanjian,
        //     'target' => $request->target,
        //     $request->save()
        // ]);

        return  redirect()->route('mitra.datalistPelaksana')->with('sukses', 'Data berhasil ditambahkan');
    }
}