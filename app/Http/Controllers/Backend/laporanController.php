<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Models\formPendaftaran;
use App\Http\Models\Jurusan;
use App\Http\Models\kelas;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    public function laporan ()
    {
        $laporan = formPendaftaran::whereStatusId(7)->get();
        return view('backend.laporan.index',compact('laporan'));
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

    public function dataSiswa($id)
    {
        $namaKelas = kelas::find($id);
        $siswa = formPendaftaran::whereStatusId('7')
        ->where('kelas_id', $id)
        ->get();

        return view('backend.laporan.jurusan.data-siswa', compact('siswa','namaKelas'));
    }
}
