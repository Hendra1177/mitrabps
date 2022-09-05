<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\JenisKelamin;
use App\Models\Kecamatan;
use App\Models\Mitra;
use App\Models\Kegiatan;
use App\Models\KegiatanMitra;
use App\Models\MitraBaru;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MitraController extends Controller
{
    public function index(Request $request)
    {
        $data = MitraBaru::join('kecamatan', 'kecamatan.id', '=', 'mitrabaru.kecamatan_id')
                ->join('desa', 'desa.id', '=', 'mitrabaru.desa_id')
                ->join('jeniskelamin', 'jeniskelamin.id', '=', 'mitrabaru.jeniskelamin_id')
                ->get(['kecamatan.nama_kecamatan', 
                    'desa.nama_desa', 
                    'mitrabaru.id', 'mitrabaru.nama_mitra', 'mitrabaru.email', 'mitrabaru.kecamatan_id', 'mitrabaru.desa_id', 'mitrabaru.alamat', 'mitrabaru.tanggal_lahir', 'mitrabaru.jeniskelamin_id', 'mitrabaru.no_hp', 'mitrabaru.pekerjaan', 'mitrabaru.rekening_bri',
                    'jeniskelamin.kelamin']);

        return view('admin.mitraindex', [ 'data' => $data]);
    }

    public function datalistMitraAdmin(Request $request)
    {
        $kecamatan = Kecamatan::orderBy('nama_kecamatan', 'asc')->get();
        $desa = Desa::orderBy('nama_desa', 'asc')->get();
        $jenis_kelamin = JenisKelamin::orderBy('kelamin', 'asc')->get();

        $datakecamatan = Kecamatan::all();
        $ds = Desa::all();

        

        $mitra_baru = MitraBaru::all();
        return view('admin.mitracreate', ['datakecamatan' => $datakecamatan, 'ds' => $ds, 'kecamatan' => $kecamatan, 'desa' => $desa, 'mitra_baru' => $mitra_baru, 'jenis_kelamin' => $jenis_kelamin]);
        
    }

    public function create(Request $request)
    {
        MitraBaru::create($request->all());
        return redirect('/admin/mitraindex')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function createMitraAdmin(Request $request)
    {
        $this->validate($request, [
            'nama_mitra' => 'required|unique:mitrabaru,nama_mitra',
            'email' => 'required|email|unique:mitrabaru,email',
            'kecamatan_id' => 'required',
            'desa_id' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'jeniskelamin_id' => 'required',
            'no_hp' => 'required|unique:mitrabaru,no_hp',
            'pekerjaan' => 'required',
            'rekening_bri' => 'unique:mitrabaru,rekening_bri',
        ]);

        
        
        $jeniskelamin_nama = JenisKelamin::Where('kelamin', $request->jeniskelamin_id)->value('id');

        $mitrabaru = new MitraBaru;
        $mitrabaru->nama_mitra = $request->nama_mitra;
        $mitrabaru->email = $request->email;
        $mitrabaru->kecamatan_id = $request->kecamatan_id;
        $mitrabaru->desa_id = $request->desa_id;
        $mitrabaru->alamat = $request->alamat;
        $mitrabaru->tanggal_lahir = $request->tanggal_lahir;
        $mitrabaru->jeniskelamin_id = $jeniskelamin_nama;
        $mitrabaru->no_hp = $request->no_hp;
        $mitrabaru->pekerjaan = $request->pekerjaan;
        $mitrabaru->rekening_bri = $request->rekening_bri;
        $mitrabaru->save();

        return  redirect()->route('mitracreate.datalistMitraAdmin')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function toCreate()
    {
        return view('admin.mitracreate');
    }

    public function edit(Request $request, $id)
    {
        $mitra = \App\Models\MitraBaru::with('jeniskelamin')->find($id);
        $kecamatan = Kecamatan::orderBy('nama_kecamatan', 'asc')->get();
        $desa = Desa::orderBy('nama_desa', 'asc')->get();

        $jeniskelamin = JenisKelamin::where('id', '!=', $mitra->jeniskelamin_id)->get(['id', 'kelamin']);
        return view('admin/mitraedit', ['mitra' => $mitra, 'kecamatan' => $kecamatan, 'desa' => $desa,'jeniskelamin' => $jeniskelamin]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $mitra = \App\Models\MitraBaru::find($id);
        $mitra->update($request->all());
        return redirect('/admin/mitra')->with('sukses', 'Data berhasil diupdate');
    }

    public function delete($id)
    {
        $mitra = \App\Models\MitraBaru::find($id);
        $mitra->delete($mitra);
        return redirect('/admin/mitra')->with('sukses', 'Data berhasil dihapus');
    }

    //User
    public function createMitra(Request $request)
    {
        \App\Models\MitraBaru::create($request->all());
        return redirect('/tambahmitra')->with('sukses', 'Data berhasil ditambahkan');
    }



    public function detail(Request $request, $id)
    {

        $mitra_baru = \App\Models\MitraBaru::find($id);
        $daftar_mitra = DB::table('mitrabaru')
        ->select('mitrabaru.id','mitrabaru.nama_mitra','mitrabaru.email','mitrabaru.alamat','mitrabaru.tanggal_lahir',
        'mitrabaru.no_hp','mitrabaru.pekerjaan','mitrabaru.rekening_bri','kecamatan.nama_kecamatan', 'kecamatan.id',
        'desa.nama_desa', 'jeniskelamin.kelamin')
        ->join('kecamatan','kecamatan.id', '=', 'mitrabaru.kecamatan_id')
        ->join('desa', 'desa.id', '=', 'mitrabaru.desa_id')
        ->join('jeniskelamin', 'jeniskelamin.id', '=', 'mitrabaru.jeniskelamin_id')
        ->where('mitrabaru.id', '=' , $mitra_baru -> id )
        ->get();
       
        $kegiatan = \App\Models\Kegiatan::find($id);
        
        

        $data_kegiatan = DB::table('kegiatan_mitra')
        ->select('kegiatan.id','kegiatan.nama_kegiatan', 'kegiatan.bulan', 'kegiatan.tanggal_mulai', 'kegiatan.tanggal_akhir', 'kegiatan.volume_total', 'kegiatan.satuan', 'kegiatan.harga_satuan', 
                    'kegiatan_mitra.nilai_perjanjian', 'kegiatan_mitra.id', 'kegiatan.beban_anggaran', 'kegiatan_mitra.target',
                    'kecamatan.nama_kecamatan', 'kecamatan.id',
                    'desa.nama_desa', 'jeniskelamin.kelamin',
                    'mitrabaru.id','mitrabaru.nama_mitra', 'mitrabaru.email', 'mitrabaru.kecamatan_id', 'mitrabaru.desa_id', 'mitrabaru.alamat', 'mitrabaru.tanggal_lahir',
                    'mitrabaru.jeniskelamin_id', 'mitrabaru.no_hp', 'mitrabaru.pekerjaan', 'mitrabaru.rekening_bri', 
                    'kegiatan_mitra.bertugas_sebagai', 'kegiatan_mitra.kegiatan_id')

            ->join('kegiatan', 'kegiatan.id', '=', 'kegiatan_mitra.kegiatan_id')
            ->join('mitrabaru', 'mitrabaru.id', '=', 'kegiatan_mitra.mitrabaru_id')
            ->join('kecamatan','kecamatan.id', '=', 'mitrabaru.kecamatan_id')
            ->join('desa', 'desa.id', '=', 'mitrabaru.desa_id')
            ->join('jeniskelamin', 'jeniskelamin.id', '=', 'mitrabaru.jeniskelamin_id')

            ->where('mitrabaru.id', '=' , $mitra_baru -> id )

            ->get();

            // $kegiatan_mitra = DB::table('kegiatan_mitra')
            // ->select('kegiatan_mitra.target', 'kegiatan_mitra.mitrabaru_id')
            // ->where('kegiatan_mitra.mitrabaru_id', '=' , $mitra_baru -> id )
            // ->get();

            $targetmitra = DB::table('kegiatan_mitra')
            ->select(DB::raw("SUM(target) as count"))
            ->orderBy("mitrabaru_id")
            ->select('target')
            ->where('mitrabaru_id', '=', $mitra_baru->id)
            ->sum('target');
            
        return view('admin.detailmitra', [ 'mitra_baru' => $mitra_baru, 'kegiatan' => $kegiatan, 
        'data_kegiatan' => $data_kegiatan,  'daftar_mitra' => $daftar_mitra, 'targetmitra' => $targetmitra ]);
        // dd($data_kegiatan);
    }
}
