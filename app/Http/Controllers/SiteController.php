<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Users;
use App\Rules\CekAlamat;
use App\Rules\CekAngka;
use App\Rules\CekUsernameCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SiteController extends Controller
{
    /////////////////////////////////////////////////////////////////////////////
    ////                        LOGIN                                        ////
    /////////////////////////////////////////////////////////////////////////////

    //FUNGSI UNTUK MENAMPILKAN HALAMAN LOGIN
    public function login()
    {
        return view('fitur_website.login');
    }



    /////////////////////////////////////////////////////////////////////////////
    ////                        REGISTER                                     ////
    /////////////////////////////////////////////////////////////////////////////

    //FUNGSI UNTUK MENAMPILKAN HALAMAN REGISTER
    public function register()
    {
        return view('fitur_website.register');
    }

    //FUNGSI UNTUK MELAKUKAN REGISTER DATA CUSTOMER
    public function do_register(Request $request)
    {
        //RULES
        $rules = [
            'nama' => 'required',
            'alamat' => ['required', new CekAlamat()],
            'telepon' => ['required', 'min:10', new CekAngka()],
            'email' => 'required | email',
            'username' => ['required', 'max:50', 'regex:/^\S*$/u', new CekUsernameCustomer()],
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

        //KODE CUSTOMER
        $jum = Users::select(DB::raw('count(*) as nama_users'))->first();
        $kd_customer = "C".str_pad((intval($jum->nama_users) + 1),4,"0",STR_PAD_LEFT);

        //STATUS CUSTOMER
        $status = "customer";

        //PASSWORD
        $password = Hash::make($request->password);

        //INPUT KE DATABASE
        $data = Users::create(
            [
                "kode_users" => $kd_customer,
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
            return redirect('/login')->with('message', 'Sukses mendaftarkan akun');
        }else {
            return redirect('/register')->with('message', 'Gagal mendaftarkan akun');
        }
    }

    /////////////////////////////////////////////////////////////////////////////
    ////                        HOME                                         ////
    /////////////////////////////////////////////////////////////////////////////

    //FUNGSI UNTUK MENAMPILKAN HALAMAN HOME
    public function home()
    {
        return view('fitur_website.home');
    }

    /////////////////////////////////////////////////////////////////////////////
    ////                        KONSULTASI                                   ////
    /////////////////////////////////////////////////////////////////////////////

    //FUNGSI UNTUK MENAMPILKAN HALAMAN KONSULTASI
    public function konsultasi()
    {
        return view('fitur_website.konsultasi');
    }

    /////////////////////////////////////////////////////////////////////////////
    ////                        SERVICE                                      ////
    /////////////////////////////////////////////////////////////////////////////

    //FUNGSI UNTUK MENAMPILKAN HALAMAN SERVICE
    public function service()
    {
        return view('fitur_website.service');
    }
}
