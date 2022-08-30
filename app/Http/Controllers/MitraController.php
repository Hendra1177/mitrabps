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

    public function datalistMitraAdmin()
    {
        $kecamatan = Kecamatan::orderBy('nama_kecamatan', 'asc')->get();
        $desa = Desa::orderBy('nama_desa', 'asc')->get();
        $jenis_kelamin = JenisKelamin::orderBy('kelamin', 'asc')->get();

        $mitra_baru = MitraBaru::all();
        return view('admin.mitracreate', ['kecamatan' => $kecamatan, 'desa' => $desa, 'mitra_baru' => $mitra_baru, 'jenis_kelamin' => $jenis_kelamin]);
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
            'jenis_kelamin_id' => 'required',
            'no_hp' => 'required|unique:mitrabaru,no_hp',
            'pekerjaan' => 'required',
            'rekening_bri' => 'unique:mitrabaru,rekening_bri',
        ]);

        $kecamatan_nama = Kecamatan::where('nama_kecamatan', $request->kecamatan_id)->value('id');
        $desa_nama = Desa::where('nama_desa', $request->desa_id)->value('id');
        $jeniskelamin_nama = JenisKelamin::Where('kelamin', $request->jenis_kelamin_id)->value('id');

        $mitrabaru = new MitraBaru;
        $mitrabaru->nama_mitra = $request->nama_mitra;
        $mitrabaru->email = $request->email;
        $mitrabaru->kecamatan_id = $kecamatan_nama;
        $mitrabaru->desa_id = $desa_nama;
        $mitrabaru->alamat = $request->alamat;
        $mitrabaru->tanggal_lahir = $request->tanggal_lahir;
        $mitrabaru->jenis_kelamin_id = $jeniskelamin_nama;
        $mitrabaru->no_hp = $request->no_hp;
        $mitrabaru->pekerjaan = $request->pekerjaan;
        $mitrabaru->rekening_bri = $request->rekening_bri;
        $mitrabaru->save();

        return  redirect()->route('mitracreate.datalistMitraAdmin')->with('sukses', 'Data berhasil ditambahkan');

        // \App\Models\MitraBaru::create($request->all());
        // if($this){
        //     return redirect('/admin/mitra')->with('sukses', 'Data berhasil ditambahkan');

        // }else{
        //     return redirect('/admin/mitra/formmitra')->with('sukses', 'Data gagal ditambahkan');
        // }
    }

    public function toCreate()
    {
        return view('admin.mitracreate');
    }

    public function edit($id)
    {
        $mitra = \App\Models\MitraBaru::find($id);
        return view('admin/mitraedit', ['mitra' => $mitra]);
    }

    public function update(Request $request, $id)
    {
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
        $data_kegiatan = KegiatanMitra::join('kegiatan', 'kegiatan.id', '=', 'kegiatan_mitra.kegiatan_id')
            ->join('mitrabaru', 'mitrabaru.id', '=', 'kegiatan_mitra.mitrabaru_id')
            ->get([
                'kegiatan.nama_kegiatan', 'kegiatan.bulan', 'kegiatan.tanggal_mulai', 'kegiatan.tanggal_akhir', 'kegiatan.volume_total', 'kegiatan.satuan', 'kegiatan.harga_satuan', 'kegiatan_mitra.nilai_perjanjian', 'kegiatan_mitra.id', 'kegiatan.beban_anggaran',
                'mitrabaru.nama_mitra', 'mitrabaru.email', 'mitrabaru.kecamatan_id', 'mitrabaru.desa_id', 'mitrabaru.alamat', 'mitrabaru.tanggal_lahir', 'mitrabaru.jeniskelamin_id', 'mitrabaru.no_hp', 'mitrabaru.pekerjaan', 'mitrabaru.rekening_bri'
            ]);
        

        
        // $kegiatan_nama = Kegiatan::where('id')->value('nama_kegiatan');

        $mitra_baru = \App\Models\MitraBaru::find($id);
        // return view('admin.detailmitra', ['mitra' => $mitra]);

        $kegiatan_mitra = \App\Models\KegiatanMitra::find($id);
        // return view('admin.detailmitra', ['kegiatan_mitra' => $kegiatan_mitra]);

        $kegiatan = \App\Models\Kegiatan::find($id);

        return view('admin.detailmitra', ['mitra_baru' => $mitra_baru, 'kegiatan' => $kegiatan, 'kegiatan_mitra' => $kegiatan_mitra, ]);
        // dd($data_kegiatan);
    }
}
