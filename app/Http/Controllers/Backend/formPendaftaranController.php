<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Models\formPendaftaran;
use App\Http\Models\invoice;
use App\Http\Models\Jurusan;
use App\Http\Models\kelas;
use App\Http\Models\uploadInvoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class formPendaftaranController extends Controller
{
    public function index()
    {
        $conditional = Auth::user()->user_role === 'siswa';
        if ($conditional) {
            $jurusan = Jurusan::all();
            $kelas = kelas::all();
            $user = Auth::user()->id;
            $formPendaftaran = formPendaftaran::whereUserId($user)->first();
            $upload = uploadInvoice::whereUserId($user)->get();
            return view('backend.pendaftaran-siswa.index', compact('jurusan', 'kelas', 'formPendaftaran', 'upload'));
        } else {
            toastr()->error('Access Denied!');
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $auth = Auth::user();
        $request->validate([
            'nama_calon_siswa' => 'required|min:5',
            'ijazah' => 'required|mimes:jpeg,png,jpg|max:2048',
            'skhun' => 'required|mimes:jpeg,png,jpg|max:2048',
            'foto' => 'required|mimes:jpeg,png,jpg|max:2048',
            'asal_sekolah' => 'required|min:5',
            'tahun_lulus' => 'required|min:4',
            'jurusan_id' => 'required|min:1',
            'kelas_id' => 'required|min:1',
            'no_telp_siswa' => 'required|min:10',
            'nama_orang_tua' => 'required|min:5',
            'no_telp_orang_tua' => 'required|min:10',
        ]);

        $data = formPendaftaran::where('user_id', $auth->id)->first();
        try {
            DB::transaction(function () use ($data, $request, $auth) {
                $data->user_id = $auth->id;
                $data->status_id = 4;
                $data->nama_calon_siswa = $request['nama_calon_siswa'];
                if (!$request->ijazah) {
                    $data->ijazah = $data->ijazah;
                } else {
                    $validasiData['ijazah'] = $request->file('ijazah')->store('asset/tf1', 'public');
                    $data->ijazah = $validasiData['ijazah'];
                }
                $data->skhun = $request['skhun'];
                if (!$request->skhun) {
                    $data->skhun = $data->skhun;
                } else {
                    $validasiData['skhun'] = $request->file('skhun')->store('asset/tf1', 'public');
                    $data->skhun = $validasiData['skhun'];
                }
                $data->foto = $request['foto'];
                $data->foto = $request['foto'];
                if (!$request->foto) {
                    $data->foto = $data->foto;
                } else {
                    $validasiData['foto'] = $request->file('foto')->store('asset/tf1', 'public');
                    $data->foto = $validasiData['foto'];
                }
                $data->asal_sekolah = $request['asal_sekolah'];
                $data->tahun_lulus = $request['tahun_lulus'];
                $data->jurusan_id = $request['jurusan_id'];
                $data->kelas_id = $request['kelas_id'];
                $data->no_telp_siswa = $request['no_telp_siswa'];
                $data->nama_orang_tua = $request['nama_orang_tua'];
                $data->no_telp_orang_tua = $request['no_telp_orang_tua'];
                $data->save();

                $invoice = invoice::where('user_id', $auth->id)->first();
                $invoice->status_id = 4;
                $invoice->save();

                $uploadInvoice = uploadInvoice::where('user_id', $auth->id)->first();
                $uploadInvoice->status_id = 4;
                $uploadInvoice->save();

                DB::commit();
            });
        } catch (\Throwable $th) {
            toastr()->error('Error Cuy!', $th->getMessage());
            return redirect()->back();
        }

        toastr()->success('Sukses!');
        return redirect()->back();
    }

    public function statusPendaftaran()
    {
        $user = Auth::user()->id;
        $role = Auth::user();
        if ($role->user_role === 'siswa') {
            $status = formPendaftaran::whereUserId($user)->get();
            return view('backend.status-pendaftaran.index', compact('status', 'user'));
        } else {
            toastr()->error('Access Denied!');
            return redirect()->back();
        }
    }

    public function jumlahPendaftaran(Request $request)
    {
        $jumlahPendaftaran = formPendaftaran::all();

        $start = date("Y-m-d", strtotime($request->start));
        $end = date("Y-m-d", strtotime($request->end));

        if ($request->start && $request->end) {
            $jumlahPendaftaran = $jumlahPendaftaran->whereBetween('updated_at', [$start, $end]);
        }

        return view('backend.pendaftaran-siswa.jumlah-pendaftaran', compact('jumlahPendaftaran', 'start', 'end'));
    }

    public function updateStatusJumlahPendaftaran($id)
    {
        try {
            $data = formPendaftaran::find($id);
            DB::transaction(function () use ($data) {
                $data->status_id = 5;
                $data->save();

                $invoice = invoice::where('user_id', $data->user_id)->first();
                $invoice->no_invoice_pendaftaran = 'BYRPN'  . $data->user_id;
                $invoice->status_id = 5;
                $invoice->save();

                $uploadInvoice = uploadInvoice::where('user_id', $data->user_id)->first();
                $uploadInvoice->status_id = 5;
                $uploadInvoice->save();

                DB::commit();
            });
        } catch (\Throwable $th) {
            toastr()->error('Error Cuy!', $th->getMessage());
            return redirect()->back();
        }
        toastr()->success('Sukses Update Status!');
        return redirect()->back();
    }
}
