<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Support\Facades\Validator;
use App\Models\KegiatanMitra;
use App\Models\MitraBaru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $kegiatan = new Kegiatan;
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->bulan = $request->bulan;
        $kegiatan->tanggal_mulai = $request->tanggal_mulai;
        $kegiatan->tanggal_akhir= $request->tanggal_akhir;
        $kegiatan->beban_anggaran = $request->beban_anggaran;
        $kegiatan->volume_total = $request->volume_total;
        $kegiatan->satuan = $request->satuan;
        $kegiatan->harga_satuan = $request->harga_satuan;
        $hitung = ($request->volume_total * $request->harga_satuan);
        $kegiatan->nilai_perjanjian = $hitung;
        $kegiatan->save();

        // $jumlah = DB::table('kegiatan_mitra')
        // ->select('kegiatan.nilai_perjanjian')
        // ->join('kegiatan', 'kegiatan.id', '=', 'kegiatan_mitra.kegiatan_id')
        // ->join('mitrabaru', 'mitrabaru.id', '=', 'kegiatan_mitra.mitrabaru_id')
        // ->sum('kegiatan.nilai_perjanjian')
        // ->save();

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
        $this->validate($request, [
            'nama_kegiatan' => 'required',
            'bulan' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'beban_anggaran' => 'required',
            'volume_total' => 'required',
            'satuan' => 'required',
            'harga_satuan' => 'required',
        ]);
        
        $kegiatan = \App\Models\Kegiatan::find($id);
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->bulan = $request->bulan;
        $kegiatan->tanggal_mulai = $request->tanggal_mulai;
        $kegiatan->tanggal_akhir= $request->tanggal_akhir;
        $kegiatan->beban_anggaran = $request->beban_anggaran;
        $kegiatan->volume_total = $request->volume_total;
        $kegiatan->satuan = $request->satuan;
        $kegiatan->harga_satuan = $request->harga_satuan;
        $hitung = ($request->volume_total * $request->harga_satuan);
        $kegiatan->nilai_perjanjian = $hitung;
        $kegiatan->save();

        
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
        $kegiatan = \App\Models\Kegiatan::find($id);

        $data_kegiatan = DB::table('kegiatan_mitra')
            ->select('kegiatan.nama_kegiatan', 'kegiatan.bulan', 'kegiatan.tanggal_mulai', 'kegiatan.tanggal_akhir', 'kegiatan.volume_total', 'kegiatan.satuan', 'kegiatan.harga_satuan', 
                    'kegiatan_mitra.id', 'kegiatan.beban_anggaran', 
                    'kecamatan.nama_kecamatan', 'kecamatan.id',
                    'desa.nama_desa', 'jeniskelamin.kelamin',
                    'mitrabaru.id','mitrabaru.nama_mitra', 'mitrabaru.email', 'mitrabaru.kecamatan_id', 'mitrabaru.desa_id', 'mitrabaru.alamat', 'mitrabaru.tanggal_lahir',
                    'mitrabaru.jeniskelamin_id', 'mitrabaru.no_hp', 'mitrabaru.pekerjaan', 'mitrabaru.rekening_bri', 
                    'kegiatan_mitra.bertugas_sebagai')
            ->join('kegiatan', 'kegiatan.id', '=', 'kegiatan_mitra.kegiatan_id')
            ->join('mitrabaru', 'mitrabaru.id', '=', 'kegiatan_mitra.mitrabaru_id')
            ->join('kecamatan','kecamatan.id', '=', 'mitrabaru.kecamatan_id')
            ->join('desa', 'desa.id', '=', 'mitrabaru.desa_id')
            ->join('jeniskelamin', 'jeniskelamin.id', '=', 'mitrabaru.jeniskelamin_id')
            ->where('kegiatan.id', '=' , $kegiatan -> id)
            ->get();
            // $kegiatan_nama = Kegiatan::where('id')->value('nama_kegiatan');
            
        $mitra_baru = \App\Models\MitraBaru::find($id);
        // return view('admin.detailmitra', ['mitra' => $mitra]);
        
        $kegiatan_mitra = \App\Models\KegiatanMitra::find($id);
        // return view('admin.detailmitra', ['kegiatan_mitra' => $kegiatan_mitra]);

        

        return view('admin.detailkegiatan', [ 'mitra_baru' => $mitra_baru, 'kegiatan' => $kegiatan, 'kegiatan_mitra' => $kegiatan_mitra, 'data_kegiatan' => $data_kegiatan ]);
        // dd($data_kegiatan);
    }


    // Method User

    public function createKegiatan(Request $request, $id)
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

        $kegiatan = \App\Models\Kegiatan::find($id);
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->bulan = $request->bulan;
        $kegiatan->tanggal_mulai = $request->tanggal_mulai;
        $kegiatan->tanggal_akhir= $request->tanggal_akhir;
        $kegiatan->beban_anggaran = $request->beban_anggaran;
        $kegiatan->volume_total = $request->volume_total;
        $kegiatan->satuan = $request->satuan;
        $kegiatan->harga_satuan = $request->harga_satuan;
        $hitung = ($request->volume_total * $request->harga_satuan);
        $kegiatan->nilai_perjanjian = $hitung;
        $kegiatan->save();
        
        if ($this) {
            return redirect('/kegiatan')->with('sukses', 'Data berhasil ditambahkan');
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
    public function updateUser(Request $request, $id)
    {
        $this->validate($request, [
            'nama_kegiatan' => 'required',
            'bulan' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'beban_anggaran' => 'required',
            'volume_total' => 'required',
            'satuan' => 'required',
            'harga_satuan' => 'required',
        ]);

        $kegiatan = \App\Models\Kegiatan::find($id);
        $kegiatan->update($request->all());
        return redirect('/kegiatan')->with('sukses', 'Data berhasil diupdate');
    }
    public function detail(Request $request, $id)
    {
       
            $kegiatan = \App\Models\Kegiatan::find($id);
            

        // $kegiatan_mitra = KegiatanMitra::with('kegiatan')->where('kegiatan_id', $kegiatan )->first();
            
        $data_kegiatan = DB::table('kegiatan_mitra')
            ->select('kegiatan.nama_kegiatan', 'kegiatan.bulan', 'kegiatan.tanggal_mulai', 'kegiatan.tanggal_akhir', 'kegiatan.volume_total', 'kegiatan.satuan', 'kegiatan.harga_satuan', 
                    'kegiatan_mitra.id', 'kegiatan.beban_anggaran', 
                    'kecamatan.nama_kecamatan', 'kecamatan.id',
                    'desa.nama_desa', 'jeniskelamin.kelamin',
                    'mitrabaru.id','mitrabaru.nama_mitra', 'mitrabaru.email', 'mitrabaru.kecamatan_id', 'mitrabaru.desa_id', 'mitrabaru.alamat', 'mitrabaru.tanggal_lahir',
                    'mitrabaru.jeniskelamin_id', 'mitrabaru.no_hp', 'mitrabaru.pekerjaan', 'mitrabaru.rekening_bri', 
                    'kegiatan_mitra.bertugas_sebagai')
            ->join('kegiatan', 'kegiatan.id', '=', 'kegiatan_mitra.kegiatan_id')
            ->join('mitrabaru', 'mitrabaru.id', '=', 'kegiatan_mitra.mitrabaru_id')
            ->join('kecamatan','kecamatan.id', '=', 'mitrabaru.kecamatan_id')
            ->join('desa', 'desa.id', '=', 'mitrabaru.desa_id')
            ->join('jeniskelamin', 'jeniskelamin.id', '=', 'mitrabaru.jeniskelamin_id')
            ->where('kegiatan.id', '=' , $kegiatan -> id)
            ->get();

        $mitra_baru = \App\Models\MitraBaru::find($id);
        return view('Kemitraan.detailkegiatan', [ 'mitra_baru' => $mitra_baru, 'kegiatan' => $kegiatan, 'data_kegiatan' => $data_kegiatan]);
    }
}
