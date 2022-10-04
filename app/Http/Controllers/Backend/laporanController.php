<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Models\formPendaftaran;
use App\Http\Models\Jurusan;
use App\Http\Models\kelas;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class laporanController extends Controller
{
    public function laporan()
    {
        $laporan = formPendaftaran::whereStatusId(7)->get();
        return view('backend.laporan.index', compact('laporan'));
    }

    public function laporanPindahJurusan($id)
    {
        $data = formPendaftaran::find($id);
        $jurusan = Jurusan::all();
        $kelas = kelas::all();
        if (Auth::user()->user_role === 'panitia' || Auth::user()->user_role === 'tu') {
            return view('backend.laporan.pindah-jurusan', compact('data', 'jurusan', 'kelas'));
        } else {
            toastr()->error('Access denied');
            return redirect()->back();
        }
    }

    public function laporanPindahJurusanUpdate(Request $request, $id)
    {
        $request->validate([
            'jurusan_id' => 'required|min:1',
            'kelas_id' => 'required|min:1'
        ]);

        $dataId = formPendaftaran::find($id);
        try {
            DB::transaction(function () use ($dataId, $request) {
                $kelas = kelas::where('jurusan_id', $dataId->jurusan_id)->first();
                $kelas->jumlah_siswa = $kelas->jumlah_siswa + 1;
                $kelas->save();

                $dataId->jurusan_id = $request['jurusan_id'];
                $dataId->kelas_id = $request['kelas_id'];
                $dataId->save();

                $count = formPendaftaran::where('id', $dataId->id)->get();
                $kelasUpdate = kelas::where('jurusan_id', $dataId->jurusan_id)->first();
                $kelasUpdate->jumlah_siswa =  $kelasUpdate->jumlah_siswa - $count->count();
                $kelasUpdate->save();
                // dd($kelasUpdate);
                DB::commit();
            });
        } catch (\Throwable $th) {
            toastr()->error('Error!', $th->getMessage());
            return redirect()->back();
        }

        toastr()->success('Selamat! Data berhasil diperbaharui.');
        return redirect()->back();
    }

    public function laporanJurusan()
    {
        $laporan = Jurusan::all();
        return view('backend.laporan.jurusan.laporan-jurusan', compact('laporan'));
    }

    public function laporanKelas($id)
    {
        $laporan = kelas::whereJurusanId($id)->get();
        return view('backend.laporan.jurusan.laporan-kelas', compact('laporan'));
    }

    public function dataSiswa(Request $request, $id)
    {
        $namaKelas = kelas::find($id);
        $siswa = formPendaftaran::whereStatusId('7')
            ->where('kelas_id', $id)
            ->get();
        $start = date("Y-m-d", strtotime($request->start));
        $end = date("Y-m-d", strtotime($request->end));
        if ($request->start && $request->end) {
            $siswa = $siswa->whereBetween('created_at', [$start, $end]);
        }

        return view('backend.laporan.jurusan.data-siswa', compact('siswa', 'namaKelas', 'start', 'end'));
    }


    public function printDataSiswa(Request $request, $id)
    {
        $data = kelas::find($id);
        $siswa = formPendaftaran::whereStatusId('7')
            ->where('kelas_id', $id)
            ->get();

        $text = 'Laporan Data Kelas';
        $user = Auth::user()->id;
        $idUser = User::where('id', $user)->first();

        $start = date("Y-m-d", strtotime($request->start));
        $end = date("Y-m-d", strtotime($request->end));

        if ($request->start && $request->end) {
            $siswa = $siswa->whereBetween('created_at', [$start, $end]);
        }

        $pdf = app('dompdf.wrapper');
        $pdf->getDomPDF()->set_option("enable_php", true);
        $pdf->loadView('backend.laporan.jurusan.print-data-kelas', compact(
            'text',
            'idUser',
            'data',
            'siswa'
        ));

        return $pdf->stream("Laporan-data-siswa-kelas.pdf");
    }
}
