<?php

namespace App\Http\Controllers;

use App\Models\KegiatanMitra;
use App\Models\Kegiatan;
use App\Models\Mitra;
use App\Models\MitraBaru;
use Illuminate\Support\Facades\DB;

// use\App\Models\KegiatanMitra;

use Illuminate\Http\Request;

class KegiatanMitraController extends Controller
{
    public function index(Request $request )
    {
        
        
        $data_kegiatan = DB::table('kegiatan_mitra')
            ->select('kegiatan.id','kegiatan.nama_kegiatan', 'kegiatan.bulan', 'kegiatan.tanggal_mulai', 'kegiatan.tanggal_akhir', 'kegiatan.volume_total', 'kegiatan.satuan', 'kegiatan.harga_satuan', 
                    'kegiatan_mitra.id', 'kegiatan.beban_anggaran', 'kegiatan.nilai_perjanjian', 'kegiatan_mitra.target',
                    'mitrabaru.id','mitrabaru.nama_mitra', 'mitrabaru.email', 'mitrabaru.kecamatan_id', 'mitrabaru.desa_id', 'mitrabaru.alamat', 'mitrabaru.tanggal_lahir',
                    'mitrabaru.jeniskelamin_id', 'mitrabaru.no_hp', 'mitrabaru.pekerjaan', 'mitrabaru.rekening_bri', 
                    'kegiatan_mitra.bertugas_sebagai', 'kegiatan_mitra.kegiatan_id', 'kegiatan_mitra.mitrabaru_id')
                    ->join('mitrabaru', 'mitrabaru.id', '=', 'kegiatan_mitra.mitrabaru_id')
                    ->join('kegiatan', 'kegiatan.id', '=', 'kegiatan_mitra.kegiatan_id')
                    
                    ->get();

        return view('admin.kegiatanmitraindex', ['data_kegiatan' => $data_kegiatan]);
    }

    public function create(Request $request)
    {
        KegiatanMitra::create($request->all());
        return redirect('/admin/kegiatanmitra')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $kegiatanmitra = \App\Models\KegiatanMitra::find($id);
        
        $data_kegiatan = DB::table('kegiatan_mitra')
        ->select('kegiatan.nama_kegiatan', 'kegiatan.bulan', 'kegiatan.tanggal_mulai', 'kegiatan.tanggal_akhir', 'kegiatan.volume_total', 'kegiatan.satuan', 'kegiatan.harga_satuan', 
                'kegiatan_mitra.id', 'kegiatan.beban_anggaran', 'mitrabaru.nama_mitra')
        ->join('kegiatan', 'kegiatan.id', '=', 'kegiatan_mitra.kegiatan_id')
        ->join('mitrabaru', 'mitrabaru.id', '=', 'kegiatan_mitra.mitrabaru_id')
        ->where('kegiatan_mitra.id', '=', $id)
        ->get();

        $kegiatan = Kegiatan::orderBy('nama_kegiatan', 'asc')->get();
        $mitra = MitraBaru::orderBy('nama_mitra', 'asc')->get();

        $kegiatan_mitra = KegiatanMitra::all();
        return view('admin.kegiatanmitraedit', ['data_kegiatan' => $data_kegiatan,'kegiatan_mitra' =>$kegiatan_mitra, 'kegiatan' => $kegiatan, 'mitra' => $mitra, 'kegiatanmitra' => $kegiatanmitra]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'kegiatan_id' => 'required|exists:kegiatan,nama_kegiatan',
            'mitrabaru_id' => 'required|exists:mitrabaru,nama_mitra',
            'bertugas_sebagai' => 'required',
            'target' => 'required|alpha-num',
        ]);

        $kegiatanmitra = \App\Models\KegiatanMitra::find($id);
        $kegiatan = Kegiatan::orderBy('nama_kegiatan', 'asc')->get();
        $mitra = MitraBaru::orderBy('nama_mitra', 'asc')->get();

        $kegiatan_nama = Kegiatan::where('nama_kegiatan', $request->kegiatan_id)->value('id');
        $mitra_nama = MitraBaru::where('nama_mitra', $request->mitrabaru_id)->value('id');

        $kegiatanmitra->kegiatan_id = $request->kegiatan_id;
        $kegiatanmitra->mitrabaru_id = $request->mitrabaru_id;
        $kegiatanmitra->bertugas_sebagai= $request->bertugas_sebagai;
        $kegiatanmitra->target = $request->target;
        $kegiatanmitra->save();

        $data_kegiatan = KegiatanMitra::join('kegiatan', 'kegiatan.id', '=', 'kegiatan_mitra.kegiatan_id')
            ->join('mitrabaru', 'mitrabaru.id', '=', 'kegiatan_mitra.mitrabaru_id')
            ->get(['kegiatan.nama_kegiatan', 'kegiatan.bulan', 'kegiatan.tanggal_mulai', 'kegiatan.tanggal_akhir', 'kegiatan.volume_total', 'kegiatan.satuan', 'kegiatan.harga_satuan', 
                    'kegiatan_mitra.id', 'kegiatan.beban_anggaran']);

        return  view('admin.kegiatanmitraindex',['kegiatanmitra'=>$kegiatanmitra,'kegiatan' => $kegiatan, 'mitra' => $mitra, 'data_kegiatan' =>$data_kegiatan])->with('successMsg', 'Data berhasil di edit');
    }

    public function delete($id)
    {
        $kegiatan = \App\Models\KegiatanMitra::find($id);
        $kegiatan->delete($kegiatan);
        return redirect('/admin/perjanjian')->with('sukses', 'Data berhasil dihapus');
    }

    public function datalistPelaksanaAdmin()
    {
        $kegiatan = Kegiatan::orderBy('nama_kegiatan', 'asc')->get();
        $mitra = MitraBaru::orderBy('nama_mitra', 'asc')->get();

        $kegiatan_mitra = KegiatanMitra::all();
        return view('admin.kegiatanmitracreate', ['kegiatan' => $kegiatan, 'mitra' => $mitra, 'kegiatan_mitra' => $kegiatan_mitra]);
    }

    public function createKegiatanAdmin(Request $request)
    {
        $this->validate($request,[
            'kegiatan_id' => 'required',
            'mitrabaru_id' => 'required',
            'bertugas_sebagai' => 'required',
            'target' => 'required',
        ]);

        $kegiatan_nama = Kegiatan::where('nama_kegiatan', $request->kegiatan_id)->value('id');
        $mitra_nama = MitraBaru::where('nama_mitra', $request->mitrabaru_id)->value('id');

        // $kegiatanmitra = new KegiatanMitra;
        // $kegiatanmitra->kegiatan_id = $kegiatan_nama;
        // $kegiatanmitra->mitrabaru_id = $mitra_nama;
        // // $kegiatanmitra->nilai_perjanjian = $request->nilai_perjanjian;
        // $kegiatanmitra->bertugas_sebagai = $request->bertugas_sebagai;
        // $kegiatanmitra->target = $request->target;
        // $kegiatanmitra->save();

        $kegiatanmitra = new KegiatanMitra;
        $kegiatanmitra->kegiatan_id = $request->kegiatan_id;
        $kegiatanmitra->mitrabaru_id = $request->mitrabaru_id;
        // $kegiatanmitra->nilai_perjanjian = $request->nilai_perjanjian;
        $kegiatanmitra->bertugas_sebagai = $request->bertugas_sebagai;
        $kegiatanmitra->target = $request->target;
        $kegiatanmitra->save();
            
        return  redirect()->route('kegiatanmitracreate.datalistPelaksanaAdmin')->with('sukses', 'Data berhasil ditambahkan');
    }

    
    // Method User
    public function createKegiatanMitra(Request $request)
    {
        \App\Models\KegiatanMitra::create($request->all());
        return redirect('/mitra')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function datalistPelaksana()
    {
        $kegiatan = Kegiatan::orderBy('nama_kegiatan', 'asc')->get();
        $mitra = MitraBaru::orderBy('nama_mitra', 'asc')->get();

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
        $this->validate($request,[
            'kegiatan_id' => 'required',
            'mitrabaru_id' => 'required',
            // 'nilai_perjanjian' => 'required',
            'bertugas_sebagai' => 'required',
            'target' => 'required',
        ]);

        $kegiatan_nama = Kegiatan::where('nama_kegiatan', $request->kegiatan_id)->value('id');
        $mitra_nama = Mitra::where('nama_mitra', $request->mitra_id)->value('id');

        $kegiatanmitra = new KegiatanMitra;
        $kegiatanmitra->kegiatan_id = $request->kegiatan_id;
        $kegiatanmitra->mitrabaru_id = $request->mitrabaru_id;
        $kegiatanmitra->bertugas_sebagai = $request->bertugas_sebagai;
        $kegiatanmitra->target = $request->target;
        $kegiatanmitra->save();
            
        return  redirect()->route('mitra.datalistPelaksana')->with('sukses', 'Data berhasil ditambahkan');
    }
}