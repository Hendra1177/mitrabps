<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kecamatan;
use App\Models\MitraBaru;
use App\Models\Kegiatan;
use App\Models\KegiatanMitra;
use App\Models\Spk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

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
            'kode_kegiatan' => 'required|unique:spk,kode_kegiatan',
            'hari' => 'required',
            'tanggal' => 'required',
            'bulan' => 'required',
            'tahun' => 'required',
            'ppk' => 'required',
            'kegiatan_id' => 'required',
            'mitrabaru_id' => 'required',
            'desa_id' => 'required',
            'kecamatan_id' => 'required',
            // 'kegiatanmitra_id' => 'required'
        ]);

        $kec = Kecamatan::where('nama_kecamatan', $request->kecamatan_id)->value('id');
        $desa = Desa::where('nama_desa', $request->desa_id)->value('id');

        $spk = new Spk;
        $spk->hari = $request->hari;
        $spk->tanggal = $request->tanggal;
        $spk->bulan = $request->bulan;
        $spk->tahun = $request->tahun;
        $spk->ppk = $request->ppk;
        $spk->kegiatan_id = $request->kegiatan_id;
        $spk->kode_kegiatan = $request->kode_kegiatan;
        $spk->mitrabaru_id = $request->mitrabaru_id;
        $spk->desa_id = $desa;
        $spk->kecamatan_id = $kec;
        $spk->save();

        // \App\Models\Spk::create($request->all());
        if ($this) {
            return redirect('/admin/spk')->with('sukses', 'Data berhasil ditambahkan');
        } else {
            return redirect('/admin/spk/create')->with('sukses', 'Data gagal ditambahkan');
        }
    }
    public function getCreate()
    {
        $kegiatan = KegiatanMitra::orderBy('kegiatan_id', 'asc')
        ->select('kegiatan_mitra.kegiatan_id', 'kegiatan_mitra.mitrabaru_id', 'kegiatan.nama_kegiatan')
        ->join('kegiatan', 'kegiatan.id', '=', 'kegiatan_mitra.kegiatan_id')
        ->get();

        $mitra = KegiatanMitra::orderBy('mitrabaru_id', 'asc')
        ->select('kegiatan_mitra.mitrabaru_id', 'kegiatan_mitra.mitrabaru_id', 'mitrabaru.nama_mitra')
        ->join('mitrabaru', 'mitrabaru.id', '=', 'kegiatan_mitra.mitrabaru_id')
        ->get();

        return view('admin.spkcreate', ['kegiatan' => $kegiatan, 'mitra' => $mitra]);
    }

    public function edit($id)
    {
        $spk = \App\Models\Spk::find($id);
        $data_kegiatan = DB::table('spk')
        ->select('kegiatan.nama_kegiatan', 'kegiatan.bulan', 'kegiatan.tanggal_mulai', 'kegiatan.tanggal_akhir', 'kegiatan.volume_total', 'kegiatan.satuan', 'kegiatan.harga_satuan', 
                'kegiatan.beban_anggaran', 'mitrabaru.nama_mitra', 'spk.kecamatan_id', 'spk.desa_id', 'kecamatan.nama_kecamatan', 'desa.nama_desa')
        ->join('kegiatan', 'kegiatan.id', '=', 'spk.kegiatan_id')
        ->join('mitrabaru', 'mitrabaru.id', '=', 'spk.mitrabaru_id')
        ->join('kecamatan', 'kecamatan.id', '=', 'spk.kecamatan_id')
        ->join('desa', 'desa.id', '=', 'spk.desa_id')
        ->where('spk.id', '=', $id)
        ->get();
        
        $kegiatan = KegiatanMitra::orderBy('kegiatan_id', 'asc')
        ->select('kegiatan_mitra.kegiatan_id', 'kegiatan_mitra.mitrabaru_id', 'kegiatan.nama_kegiatan')
        ->join('kegiatan', 'kegiatan.id', '=', 'kegiatan_mitra.kegiatan_id')
        ->get();
        $mitra = KegiatanMitra::orderBy('mitrabaru_id', 'asc')->get();

        // $spk = Spk::all();
        // $kegiatan_mitra = KegiatanMitra::all();
        return view('admin.spkedit', ['spk' => $spk, 'data_kegiatan' => $data_kegiatan, 'kegiatan' => $kegiatan, 'mitra' => $mitra]);
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
            'kode_kegiatan' => 'required|unique:spk,kode_kegiatan',
            'mitrabaru_id' => 'required',
            'desa_id' => 'required',
            'kecamatan_id' => 'required',
        ]);

        $spk = \App\Models\Spk::find($id);
        $kegiatan = KegiatanMitra::orderBy('kegiatan_id', 'asc')->get();
        $mitra = KegiatanMitra::orderBy('mitrabaru_id', 'asc')->get();

        // $kegiatan_nama = Kegiatan::where('nama_kegiatan', $request->kegiatan_id)->value('id');
        // $mitra_nama = MitraBaru::where('nama_mitra', $request->mitrabaru_id)->value('id');

        $kec = Kecamatan::where('nama_kecamatan', $request->kecamatan_id)->value('id');
        $desa = Desa::where('nama_desa', $request->desa_id)->value('id');

        $spk->hari = $request->hari;
        $spk->tanggal = $request->tanggal;
        $spk->bulan = $request->bulan;
        $spk->tahun = $request->tahun;
        $spk->ppk = $request->ppk;
        $spk->kegiatan_id = $request->kegiatan_id;
        $spk->kode_kegiatan = $request->kode_kegiatan;
        $spk->mitrabaru_id = $request->mitrabaru_id;
        $spk->desa_id = $desa;
        $spk->kecamatan_id = $kec;
        $spk->save();

        $spk = DB::table('spk')
        ->select('mitrabaru.nama_mitra', 'kegiatan.nama_kegiatan', 'spk.hari', 'spk.tanggal', 'spk.bulan', 'spk.tahun', 'spk.ppk', 
                'spk.id', 'kecamatan.nama_kecamatan', 'desa.nama_desa', 'spk.kecamatan_id', 'spk.desa_id')
        ->join('kegiatan', 'kegiatan.id', '=', 'spk.kegiatan_id')
        ->join('mitrabaru', 'mitrabaru.id', '=', 'spk.mitrabaru_id')
        ->join('kecamatan', 'kecamatan.id', '=', 'spk.kecamatan_id')
        ->join('desa', 'desa.id', '=', 'spk.desa_id')
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

    public function deleteMultiple(Request $request)
    {
        
        $spk = Spk::whereIn('id', $request->ids)->delete();
        return redirect('/admin/spk')->with('sukses', 'Data berhasil dihapus');
    }

    public function detailspk ($id)
    {
        $spk = \App\Models\Spk::find($id);
        $data = DB::table('spk')
            ->select('spk.bulan','spk.tahun','spk.id','spk.kegiatanmitra_id','spk.hari', 'spk.ppk','spk.mitrabaru_id', 'spk.tanggal',
                    'mitrabaru.nama_mitra', 'mitrabaru.pekerjaan', 'mitrabaru.alamat','mitrabaru.id','kecamatan.nama_kecamatan')
            ->join('mitrabaru','mitrabaru.id', '=','spk.mitrabaru_id' )
            ->join('kecamatan','kecamatan.id','=','spk.kecamatan_id')
            ->where('spk.id', '=', $spk->id)
            ->get();
        return view ('admin.detailspk', ['spk' => $spk, 'data' => $data]);
        // echo $data;
    }
    public function cetakPdf($id)
    {
        
            
        $kegiatanspk = \App\Models\Spk::find($id);
        $kegiatan = Spk::orderBy('kegiatan_id','asc')
        ->select('spk.kegiatan_id', 'kegiatan.nama_kegiatan')
        ->join('kegiatan', 'kegiatan.id', '=', 'spk.kegiatan_id')
        ->where('spk.id','=', $kegiatanspk->id)
        ->get();

        $spk = \App\Models\Spk::find($id);
        $data = DB::table('spk')
            ->select('spk.bulan','spk.tahun','spk.id','spk.kegiatanmitra_id','spk.hari', 'spk.ppk','spk.mitrabaru_id','spk.tanggal',
                    'mitrabaru.nama_mitra', 'mitrabaru.pekerjaan', 'mitrabaru.alamat','mitrabaru.id','kecamatan.nama_kecamatan',
                    'kegiatan.harga_satuan','kegiatan.tanggal_mulai','kegiatan.tanggal_akhir',
                    'desa.nama_desa', 'kegiatan.beban_anggaran')
            ->join('mitrabaru','mitrabaru.id', '=','spk.mitrabaru_id' )
            ->join('kecamatan','kecamatan.id','=','spk.kecamatan_id')
            ->join('kegiatan','kegiatan.id','=','spk.kegiatan_id')
            ->join('desa','desa.id','=','spk.desa_id')
            ->where('spk.id', '=', $spk->id)
            ->get();

        $pdf =PDF::loadview('admin.cetakspk',['spk'=>$spk , 'data'=>$data, 'kegiatan'=>$kegiatan])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream();
        
    }

    public function cetakLampiran($id)
    {
        $mitra_baru = \App\Models\MitraBaru::find($id);
        $spkid = Spk::find($id);

        $spk = DB::table('spk')
        ->select('spk.kegiatan_id', 'spk.mitrabaru_id', 'kegiatan.nama_kegiatan', 'mitrabaru.nama_mitra', 'kegiatan.tanggal_mulai', 'spk.kode_kegiatan', 
                'kegiatan.tanggal_akhir', 'kegiatan.volume_total', 'kegiatan.nilai_perjanjian', 'kegiatan.satuan', 'kegiatan.harga_satuan', 
                'kegiatan.beban_anggaran')
        ->join('kegiatan', 'kegiatan.id', '=', 'spk.kegiatan_id')
        ->join('mitrabaru', 'mitrabaru.id', '=', 'spk.mitrabaru_id')
        ->where('spk.id', '=' , $spkid -> id)
        ->get();

        $kd_spk1 = Spk::find($id);
        $kd_spk = DB::table('spk')
        ->select('spk.kode_kegiatan', 'spk.mitrabaru_id', 'spk.bulan')
        ->where('spk.id', '=', $kd_spk1 -> id)
        ->get();



        
        return view('admin.cetakmitrapdf', ['spk' => $spk, 'kd_spk'=>$kd_spk]);
    }
}
