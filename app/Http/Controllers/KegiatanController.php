<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Support\Facades\Validator;
use App\Models\KegiatanMitra;

use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_kegiatan = \App\Models\Kegiatan::where('nama_kegiatan', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_kegiatan = \App\Models\Kegiatan::all();
        }

        return view('admin.kegiatanindex', ['data_kegiatan' => $data_kegiatan]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'nama_kegiatan' => 'required|unique:kegiatan,nama_kegiatan',
            'bulan' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'beban_anggaran' => 'required',
            'volume_total' => 'required',
            'satuan' => 'required',
            'harga_satuan' => 'required',
        ]);

        \App\Models\Kegiatan::create($request->all());
        if ($this) {
            return redirect('/admin/kegiatan')->with('sukses', 'Data berhasil ditambahkan');
        } else {
            return redirect('/admin/kegiatan/formkegiatan')->with('sukses', 'Data gagal ditambahkan');
        }
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
    public function detailAdmin(Request $request, $id)
    {
        $data_kegiatan = KegiatanMitra::join('kegiatan', 'kegiatan.id', '=', 'kegiatan_mitra.kegiatan_id')
            ->join('mitra', 'mitra.id', '=', 'kegiatan_mitra.mitra_id')
            ->get(['kegiatan.nama_kegiatan', 'kegiatan.bulan', 'kegiatan.tanggal_mulai', 'kegiatan.tanggal_akhir', 'kegiatan.volume_total', 'kegiatan.satuan', 'kegiatan.harga_satuan', 'mitra.nama_mitra', 'kegiatan_mitra.nilai_perjanjian', 'kegiatan_mitra.id', 'kegiatan.beban_anggaran']);
            // $kegiatan_nama = Kegiatan::where('id')->value('nama_kegiatan');
            
        $mitra = \App\Models\Mitra::find($id);
        // return view('admin.detailmitra', ['mitra' => $mitra]);
        
        $kegiatan_mitra = \App\Models\KegiatanMitra::find($id);
        // return view('admin.detailmitra', ['kegiatan_mitra' => $kegiatan_mitra]);

        $kegiatan = \App\Models\Kegiatan::find($id);

        return view('admin.detailkegiatan', [ 'mitra' => $mitra, 'kegiatan' => $kegiatan, 'kegiatan_mitra' => $kegiatan_mitra, ]);
        // dd($data_kegiatan);
    }

    // Method User

    public function createKegiatan(Request $request)
    {
        $this->validate($request, [
            'nama_kegiatan' => 'required|unique:kegiatan,nama_kegiatan',
            'bulan' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'beban_anggaran' => 'required',
            'volume_total' => 'required',
            'satuan' => 'required',
            'harga_satuan' => 'required',
        ]);

        \App\Models\Kegiatan::create($request->all());
        if ($this) {
            return redirect('/pelaksana')->with('sukses', 'Data berhasil ditambahkan');
        } else {
            return redirect('/kegiatan/formkegiatan')->with('sukses', 'Data gagal ditambahkan');
        }
    }

    public function search()
    {
        return view('Kemitraan.tambahkegiatan');
    }

    public function toCreate()
    {
        return view('admin.kegiatancreate');
    }
    public function indexUser(Request $request)
    {
        if ($request->has('cari')) {
            $data_kegiatan = \App\Models\Kegiatan::where('nama_kegiatan', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_kegiatan = \App\Models\Kegiatan::all();
        }

        return view('Kemitraan.kegiatanindex', ['data_kegiatan' => $data_kegiatan]);
    }
    public function toCreateUser()
    {
        return view('Kemitraan.tambahkegiatan');
    }
    public function editUser($id)
    {
        $kegiatan = \App\Models\Kegiatan::find($id);
        return view('Kemitraan/kegiatanedit', ['kegiatan' => $kegiatan]);
    }
    public function detail(Request $request, $id)
    {
        $data_kegiatan = KegiatanMitra::join('kegiatan', 'kegiatan.id', '=', 'kegiatan_mitra.kegiatan_id')
            ->join('mitra', 'mitra.id', '=', 'kegiatan_mitra.mitra_id')
            ->get(['kegiatan.nama_kegiatan', 'kegiatan.bulan', 'kegiatan.tanggal_mulai', 'kegiatan.tanggal_akhir', 'kegiatan.volume_total', 'kegiatan.satuan', 'kegiatan.harga_satuan', 'mitra.nama_mitra', 'kegiatan_mitra.nilai_perjanjian', 'kegiatan_mitra.id', 'kegiatan.beban_anggaran']);
            // $kegiatan_nama = Kegiatan::where('id')->value('nama_kegiatan');
            
        $mitra = \App\Models\Mitra::find($id);
        // return view('admin.detailmitra', ['mitra' => $mitra]);
        
        $kegiatan_mitra = \App\Models\KegiatanMitra::find($id);
        // return view('admin.detailmitra', ['kegiatan_mitra' => $kegiatan_mitra]);

        $kegiatan = \App\Models\Kegiatan::find($id);

        return view('Kemitraan.detailkegiatan', [ 'mitra' => $mitra, 'kegiatan' => $kegiatan, 'kegiatan_mitra' => $kegiatan_mitra, ]);
        // dd($data_kegiatan);
    }
}
