<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Models\formPendaftaran;
use App\Http\Models\invoice;
use App\Http\Models\status;
use App\Http\Models\uploadInvoice;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mail;


class invoiceController extends Controller
{
    public function index()
    {
        $data = invoice::all();
        return view('backend.inovice.index', compact('data'));
    }

    public function buktiUploadInvoice()
    {
        $data = uploadInvoice::all();
        return view('backend.inovice.bukti-upload-invoice', compact('data'));
    }

    public function approveStatusRegister()
    {
        $data = uploadInvoice::all();
        return view('backend.approve.index', compact('data'));
    }

    public function updateInvoiceTf1($id)
    {
        $data = uploadInvoice::find($id);
        DB::transaction(function () use ($data) {
            try {
                $data->validasi_bukti_transfer_1 = 'setujui';
                $data->status_id = 3;
                $data->save();

                $invoice = invoice::whereUserId($data->user_id)->first();
                $invoice->status_id = 3;
                $invoice->save();

                $formPendaftaran = formPendaftaran::whereUserId($data->user_id)->first();
                $formPendaftaran->status_id = 3;
                $formPendaftaran->save();

                DB::commit();
            } catch (\Throwable $th) {
                DB::rollback();
                toastr()->error($th->getMessage());
                return redirect()->back();
            }
        });
        toastr()->success('Sukses Update TF 1');
        return redirect()->back();
    }

    public function updateInvoiceTf2($id)
    {
        $data = uploadInvoice::find($id);
        DB::transaction(function () use ($data) {
            try {
                $data->validasi_bukti_transfer_2 = 'setujui';
                $data->status_id = 7;

                $data->save();

                $invoice = invoice::whereUserId($data->user_id)->first();
                $invoice->status_id = 7;
                $invoice->save();

                $formPendaftaran = formPendaftaran::whereUserId($data->user_id)->first();
                $formPendaftaran->status_id = 7;
                $formPendaftaran->save();



                //* Send email for notification
                $dataFormPendaftaran = formPendaftaran::where('user_id', $data->user_id)->first();
                $user = User::where('id', $data->user_id)->first();
                $email = $user->email;
                $mailFrom = config('app.mail_from');
                $mailName = config('app.mail_name');
                $mailTest = array(
                    'username' => $dataFormPendaftaran->nama_calon_siswa,
                    'status' => $dataFormPendaftaran->status->nama_status,
                    'id' => 'test'
                );
                //* Send email
                Mail::send('layouts.index', $mailTest, function ($message) use ($email, $mailFrom, $mailName) {
                    $message->to($email)->subject('Notifikasi Status Pendaftaran');
                    $message->from($mailFrom, $mailName);
                });

                DB::commit();
            } catch (\Throwable $th) {
                DB::rollback();
                toastr()->error($th->getMessage());
                return redirect()->back();
            }
        });
        toastr()->success('Sukses Update TF 2');
        return redirect()->back();
    }

    public function invoiceSiswa()
    {
        $auth = Auth::user();
        $invoice = invoice::where('user_id', $auth->id)->first();
        $formPendaftaran = formPendaftaran::where('user_id', $auth->id)->first();
        return view('backend.invoice.index', compact('invoice', 'formPendaftaran'));
    }

    public function printInvoiceSiswa()
    {
        $auth = Auth::user();
        $invoice = invoice::where('user_id', $auth->id)->first();
        $formPendaftaran = formPendaftaran::where('user_id', $auth->id)->first();
        return view('backend.invoice.print-invoice', compact('auth', 'invoice', 'formPendaftaran'));
    }
}
