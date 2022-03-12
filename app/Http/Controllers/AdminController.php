<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Teknisi;
use App\Models\Users;
use App\Rules\CekAlamat;
use App\Rules\CekAngka;
use App\Rules\CekUsernameAdmin;
use App\Rules\CekUsernameKembar;
use App\Rules\CekUsernameTeknisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /////////////////////////////////////////////////////////////////////////////
    ////                        ADMIN                                        ////
    /////////////////////////////////////////////////////////////////////////////

    //FUNGSI UNTUK MENAMPILKAN HALAMAN DASHBOARD
    public function dashboard()
    {
        return view('fitur_admin.dashboard');
    }

    /////////////////////////////////////////////////////////////////////////////
    ////                       TEKNISI                                       ////
    /////////////////////////////////////////////////////////////////////////////

    //FUNGSI UNTUK MENAMPILKAN DATA KARYAWAN
    public function datakaryawan()
    {
        $result = Users::where('status_users','admin')->orWhere('status_users','teknisi')->get();
        $param = [];
        $param['result'] = $result;
        return view('fitur_admin.datakaryawan', $param);
    }

    //FUNGSI TAMBAH TEKNISI
    public function tambah_karyawan(Request $request)
    {
        //RULES
        $rules = [
            'nama' => 'required',
            'alamat' => ['required', new CekAlamat],
            'telepon' => ['required', 'min:10', new CekAngka],
            'email' => 'required | email',
            'status' => 'required',
            'username' => ['required', 'max:50', 'regex:/^\S*$/u', new CekUsernameKembar],
            'password' => 'required | confirmed',
            'password_confirmation' => 'required'
        ];

        //ERROR MESSAGE
        $custom_msg = [
            'required' => ':attribute harus diisi !',
            'min' => ':attribute minimal 10 angka',
            'max' => ':attribute maksimal 50 huruf',
            'confirmed' => 'password dan confirm password harus sama !',
            'regex' => ':attribute tidak boleh menggunakan spasi !',
            'email' => ':attribute harus sesuai format !'
        ];

        //VALIDASI
        $this->validate($request, $rules, $custom_msg);

        //KODE KARYAWAN
        if($request->status == "admin"){
            $jum = Users::select(DB::raw('count(*) as nama_users'))->first();
            $kd_karyawan = "A".str_pad((intval($jum->nama_users) + 1),4,"0",STR_PAD_LEFT);
        }

        if($request->status == "teknisi"){
            $jum = Users::select(DB::raw('count(*) as nama_users'))->first();
            $kd_karyawan = "T".str_pad((intval($jum->nama_users) + 1),4,"0",STR_PAD_LEFT);
        }

        //STATUS CUSTOMER
        $status = $request->status;

        //PASSWORD
        $password = Hash::make($request->password);

        //INPUT KE DATABASE
        $data = Users::create(
            [
                "kode_users" => $kd_karyawan,
                "nama_users" => $request -> nama,
                "alamat_users" => $request -> alamat,
                "telepon_users" => $request -> telepon,
                "email_users" => $request -> email,
                "status_users" => $status,
                "username_users" => $request -> username,
                "password_users" => $password
            ]
        );

        //ROUTING
        if($data){
            return redirect('/admin/datakaryawan')->with('message', 'Sukses mendaftarkan akun');
        }else {
            return redirect('/admin/datakaryawan')->with('message', 'Gagal mendaftarkan akun');
        }
    }

    /////////////////////////////////////////////////////////////////////////////
    ////                       CUSTOMER                                      ////
    /////////////////////////////////////////////////////////////////////////////


    //FUNGSI UNTUK MENAMPILKAN DATA CUSTOMER
    public function datacustomer()
    {
        $result = Users::where('status_users','customer')->get();

        $param = [];
        $param['result'] = $result;
        return view('fitur_admin.datacustomer', $param);
    }
}
