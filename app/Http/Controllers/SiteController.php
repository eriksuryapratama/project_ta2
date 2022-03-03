<?php

namespace App\Http\Controllers;

use App\Models\Customer;
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

    public function do_register(Request $request)
    {
        //RULES
        $rules = [
            'nama_customer' => 'required',
            'alamat_customer' => ['required', new CekAlamat()],
            'telepon_customer' => ['required', 'min:10', new CekAngka()],
            'email_customer' => 'required | email',
            'username_customer' => ['required', 'regex:/^\S*$/u', new CekUsernameCustomer()],
            'password' => 'required | confirmed',
            'password_confirmation' => 'required'
        ];

        //ERROR MESSAGE
        $custom_msg = [
            'required' => ':attribute harus diisi !',
            'min' => ':attribute minimal 10 angka',
            'confirmed' => 'password dan confirm password harus sama !',
            'regex' => ':attribute tidak boleh menggunakan spasi !',
            'email' => ':attribute harus sesuai format !'
        ];

        //VALIDASI
        $this->validate($request, $rules, $custom_msg);

        //KODE PEGAWAI
        $jum = Customer::select(DB::raw('count(*) as nama_customer'))->first();
        $kd_customer = "C".str_pad((intval($jum->nama_customer) + 1),4,"0",STR_PAD_LEFT);

        //INPUT KE DATABASE
        $data = $request->all();
        $data['kode_customer'] = $kd_customer;
        $data['password_customer'] = Hash::make($data['password']);
        Customer::create($data);

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
