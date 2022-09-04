<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Models\formPendaftaran;
use App\Http\Models\invoice;
use App\Http\Models\uploadInvoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class uploadController extends Controller
{
    public function uploadBukti1(Request $request)
    {
        $auth = Auth::user()->id;
        $name = Auth::user();
        DB::transaction(function () use ($auth, $request, $name) {
            $validate = $request->validate([
                'bukti_transfer_1' => 'required|mimes:jpeg,png,jpg|max:2048',
            ]);
            $data = new uploadInvoice();
            $data->user_id = $auth;
            $data->nama_calon_siswa = $name->name;
            $data->status_id = 2;
            $data->bukti_transfer_1 = $request->bukti_transfer_1;
            if (!$validate['bukti_transfer_1']) {
                $data->bukti_transfer_1 = $data->bukti_transfer_1;
            } else {
                $validate['bukti_transfer_1'] = $request->file('bukti_transfer_1')->store('asset/tf1', 'public');
                $data->bukti_transfer_1 = $validate['bukti_transfer_1'];
            }
            $data->validasi_bukti_transfer_1 = 'menunggu';
            $data->save();

            $formPendaftaran = formPendaftaran::where('user_id', $data->user_id)->first();
            $formPendaftaran->status_id = 2;
            $formPendaftaran->save();

            $invoice = invoice::find($data->id);
            $invoice->status_id = 2;
            $invoice->save();
            DB::commit();
        });

        toastr()->success('Sukses!');
        return redirect()->back();
    }

    public function uploadBukti2(Request $request)
    {
        $auth = Auth::user()->id;
        DB::transaction(function () use ($auth, $request) {
            $validate = $request->validate([
                'bukti_transfer_2' => 'required|mimes:jpeg,png,jpg|max:2048',
            ]);
            $data = uploadInvoice::where('user_id', $auth)->first();
            $data->status_id = 6;
            $data->bukti_transfer_2 = $request->bukti_transfer_2;
            if (!$validate['bukti_transfer_2']) {
                $data->bukti_transfer_2 = $data->bukti_transfer_2;
            } else {
                $validate['bukti_transfer_2'] = $request->file('bukti_transfer_2')->store('asset/tf2', 'public');
                $data->bukti_transfer_2 = $validate['bukti_transfer_2'];
            }
            $data->validasi_bukti_transfer_2 = 'menunggu';
            $data->save();

            $formPendaftaran = formPendaftaran::where('user_id', $data->user_id)->first();
            $formPendaftaran->status_id = 6;
            $formPendaftaran->save();

            $invoice = invoice::find($data->id);
            $invoice->status_id = 6;
            $invoice->jenis_biaya_id = 2;
            $invoice->save();
            DB::commit();
        });

        toastr()->success('Sukses!');
        return redirect()->back();
    }
}
