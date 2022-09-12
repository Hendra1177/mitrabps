<?php

namespace App\Http\Controllers;

use App\Models\MitraBaru;
use App\Models\Kegiatan;
use App\Models\KegiatanMitra;
use App\Models\Spk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SpkController extends Controller
{
    public function index (Request $request)
    {
        $spk = DB::table('spk')
        ->select('mitrabaru.nama_mitra', 'kegiatan.nama_kegiatan', 'spk.hari', 'spk.tanggal', 'spk.bulan', 'spk.tahun', 'spk.ppk', 'spk.id')
        ->join('kegiatan', 'kegiatan.id', '=', 'spk.kegiatan_id')
        ->join('mitrabaru', 'mitrabaru.id', '=', 'spk.mitrabaru_id')
        ->get();
        return view('admin.spkindex', ['spk' => $spk]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'hari' => 'required',
            'tanggal' => 'required',
            'bulan' => 'required',
            'tahun' => 'required',
            'ppk' => 'required',
            'kegiatan_id' => 'required',
            'mitrabaru_id' => 'required',
            // 'kegiatanmitra_id' => 'required'
        ]);

        $spk = new Spk;
        $spk->hari = $request->hari;
        $spk->tanggal = $request->tanggal;
        $spk->bulan = $request->bulan;
        $spk->tahun = $request->tahun;
        $spk->ppk = $request->ppk;
        $spk->kegiatan_id = $request->kegiatan_id;
        $spk->mitrabaru_id = $request->mitrabaru_id;
        $spk->save();

        \App\Models\Spk::create($request->all());
        if ($this) {
            return redirect('/admin/spk')->with('sukses', 'Data berhasil ditambahkan');
        } else {
            return redirect('/admin/spk/create')->with('sukses', 'Data gagal ditambahkan');
        }
    }
    public function getCreate()
    {
        $kegiatanmitra_nama = KegiatanMitra::join('kegiatan', 'kegiatan.id', '=', 'kegiatan_mitra.kegiatan_id')
        ->get(['kegiatan.nama_kegiatan']);
        $kegiatan = KegiatanMitra::orderBy('kegiatan_id', 'asc')->get();
        $mitra = KegiatanMitra::orderBy('mitrabaru_id', 'asc')->get();

        return view('admin.spkcreate', ['kegiatan' => $kegiatan, 'mitra' => $mitra]);
    }

    public function edit($id)
    {
        $spk = \App\Models\Spk::find($id);
        $kegiatan = KegiatanMitra::orderBy('kegiatan_id', 'asc')->get();
        $mitra = KegiatanMitra::orderBy('mitrabaru_id', 'asc')->get();

        // $spk = Spk::all();
        // $kegiatan_mitra = KegiatanMitra::all();
        return view('admin.spkedit', ['spk' => $spk, 'kegiatan' => $kegiatan, 'mitra' => $mitra]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'hari' => 'required',
            'tanggal' => 'required',
            'bulan' => 'required',
            'tahun' => 'required',
            'ppk' => 'required',
            'kegiatan_id' => 'required',
            'mitrabaru_id' => 'required',
        ]);

        $spk = \App\Models\Spk::find($id);
        $kegiatan = KegiatanMitra::orderBy('kegiatan_id', 'asc')->get();
        $mitra = KegiatanMitra::orderBy('mitrabaru_id', 'asc')->get();

        // $kegiatan_nama = Kegiatan::where('nama_kegiatan', $request->kegiatan_id)->value('id');
        // $mitra_nama = MitraBaru::where('nama_mitra', $request->mitrabaru_id)->value('id');

        $spk->hari = $request->hari;
        $spk->tanggal = $request->tanggal;
        $spk->bulan = $request->bulan;
        $spk->tahun = $request->tahun;
        $spk->ppk = $request->ppk;
        $spk->kegiatan_id = $request->kegiatan_id;
        $spk->mitrabaru_id = $request->mitrabaru_id;
        $spk->save();

        $spk = DB::table('spk')
        ->select('mitrabaru.nama_mitra', 'kegiatan.nama_kegiatan', 'spk.hari', 'spk.tanggal', 'spk.bulan', 'spk.tahun', 'spk.ppk', 'spk.id')
        ->join('kegiatan', 'kegiatan.id', '=', 'spk.kegiatan_id')
        ->join('mitrabaru', 'mitrabaru.id', '=', 'spk.mitrabaru_id')
        ->get();

        $data_kegiatan = Spk::join('kegiatan', 'kegiatan.id', '=', 'spk.kegiatan_id')
            ->join('mitrabaru', 'mitrabaru.id', '=', 'spk.mitrabaru_id')
            ->get(['kegiatan.nama_kegiatan', 'kegiatan.bulan', 'kegiatan.tanggal_mulai', 'kegiatan.tanggal_akhir', 'kegiatan.volume_total', 'kegiatan.satuan', 'kegiatan.harga_satuan', 
                    ]);

        return  view('admin.spkindex',['kegiatan' => $kegiatan, 'mitra' => $mitra, 'data_kegiatan' =>$data_kegiatan, 'spk' => $spk])->with('sukses', 'Data berhasil di edit');
    }

    public function delete($id)
    {
        $spk = \App\Models\Spk::find($id);
        $spk->delete($spk);
        return redirect('/admin/spk')->with('sukses', 'Data berhasil dihapus');
    }

    public function detailspk ($id)
    {
        $spk = \App\Models\Spk::find($id);
        $data = DB::table('spk')
            ->select('spk.bulan','spk.tahun','spk.id','spk.kegiatanmitra_id','spk.hari', 'spk.ppk','spk.mitrabaru_id',
                    'mitrabaru.nama_mitra', 'mitrabaru.pekerjaan', 'mitrabaru.alamat','mitrabaru.id','kecamatan.nama_kecamatan')
            ->join('mitrabaru','mitrabaru.id', '=','spk.mitrabaru_id' )
            ->join('kecamatan','kecamatan.id','=','spk.kecamatan_id')
            ->where('spk.id', '=', $spk->id)
            ->get();
        return view ('admin.detailspk', ['spk' => $spk, 'data' => $data]);
        // echo $data;
    }
}
