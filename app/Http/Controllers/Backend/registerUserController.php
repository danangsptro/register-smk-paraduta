<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Models\formPendaftaran;
use App\Http\Models\invoice;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PDO;

class registerUserController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // WhereNotIn != id
        // Wherein === id
        $data = User::whereNotIn('id', [$user->id])->get();

        if (Auth::user()->user_role === 'admin' || Auth::user()->user_role === 'panitia') {
            return view('backend.register.index', compact('data'));
        } else {
            toastr()->error('Access Denied!');
            return redirect()->back();
        }
    }

    public function store(Request $request)
    {
        $data = new User();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->alamat = $request->alamat;
        $data->user_role = $request->user_role;
        $data->no_telepon = $request->no_telepon;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->password = Hash::make('qwerty');
        $data->save();

        if ($data) {
            toastr()->success('Data has been saved successfully!');
            return redirect()->back();
        }
    }

    public function storeFront(Request $request)
    {
        $data = new User();
        DB::transaction(function () use ($data, $request) {
            try {
                $data->name = $request->name;
                $data->email = $request->email;
                $data->jenis_kelamin = $request->jenis_kelamin;
                $data->alamat = $request->alamat;
                $data->user_role = 'siswa';
                $data->no_telepon = $request->no_telepon;
                $data->tanggal_lahir = $request->tanggal_lahir;
                $data->tempat_lahir = $request->tempat_lahir;
                $data->password = Hash::make($request->password);
                $data->save();

                $formPendaftaran = new formPendaftaran();
                $formPendaftaran->user_id = $data->id;
                $formPendaftaran->status_id = 1;
                $formPendaftaran->nama_calon_siswa = $data->name;
                $formPendaftaran->save();

                $invoice = new invoice();
                $invoice->no_invoice_formulir = 'BYRFR' . $data->id;
                $invoice->user_id = $data->id;
                $invoice->jenis_biaya_id = 1;
                $invoice->status_id = 1;
                $invoice->save();
                DB::commit();
            } catch (\Exception $th) {
                DB::rollback();
                toastr()->error($th->getMessage());
                return redirect()->back();
            }
        });
        toastr()->success('Selamat Anda Sudah Mengisi Pendaftaran!');
        return redirect()->back();
    }

    public function profile()
    {
        $data = Auth::user();
        return view('backend.home.profile', compact('data'));
    }

    public function updateUser($id)
    {
        $data = User::find($id);
        return view('backend.register.edit', compact('data'));
    }

    public function editProfile(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:1',
            'email' => 'required|min:1|unique:users,email,' .$id,
            'jenis_kelamin' => 'required|min:1',
            'alamat' => 'required|min:1',
            'no_telepon' => 'required|min:1',
            'tempat_lahir' => 'required|min:1',
            'tanggal_lahir' => 'required|min:1',
        ]);
        $input = $request->all();
        $data = user::find($id);
        $data->update($input);

        toastr()->success('Selamat! Data Profile berhasil diperbaharui.');
        return redirect()->back();
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'password' => 'required|min:8',
            'confirm_password' => 'required|min:8|same:password'
        ]);

        $data = User::find($id);
        $data->update([
            'password' => Hash::make($request->password)
        ]);

        toastr()->success('Selamat! Password berhasil diperbaharui.');
        return redirect()->back();
    }

    public function delete($id)
    {
        $data = User::find($id);
        if ($data) {
            $data->delete();
            toastr()->success('Data telah berhasil dihapus!');
            return redirect()->back();
        } else {
            toastr()->error('Data not found!');
            return redirect()->back();
        }
    }
}
