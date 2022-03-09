<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Teknisi;
use App\Rules\CekAlamat;
use App\Rules\CekAngka;
use App\Rules\CekUsernameAdmin;
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

    //FUNGSI UNTUK MENAMPILKAN DATA TEKNISI
    public function datateknisi()
    {
        $result = Teknisi::all();
        $param = [];
        $param['result'] = $result;
        return view('fitur_admin.datateknisi', $param);
    }

    //FUNGSI UNTUK MENAMPILKAN FORM TAMBAH TEKNISI
    public function form_teknisi()
    {
        return view('fitur_admin.tambah_teknisi');
    }

    //FUNGSI TAMBAH TEKNISI
    public function tambah_teknisi(Request $request)
    {
        //RULES
        $rules = [
            'nama_teknisi' => 'required',
            'alamat_teknisi' => ['required', new CekAlamat],
            'telepon_teknisi' => ['required', 'min:10', new CekAngka],
            'email_teknisi' => 'required | email',
            'username_teknisi' => ['required', 'max:50', 'regex:/^\S*$/u', new CekUsernameTeknisi],
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

        //KODE TEKNISI
        $jum = Teknisi::select(DB::raw('count(*) as nama_teknisi'))->first();
        $kd_customer = "T".str_pad((intval($jum->nama_teknisi) + 1),4,"0",STR_PAD_LEFT);

        //INPUT KE DATABASE
        $data = $request->all();
        $data['kode_teknisi'] = $kd_customer;
        $data['password_teknisi'] = Hash::make($data['password']);
        Teknisi::create($data);

        //ROUTING
        if($data){
            return redirect('/admin/datateknisi')->with('message', 'Sukses mendaftarkan akun');
        }else {
            return redirect('/admin/datateknisi')->with('message', 'Gagal mendaftarkan akun');
        }
    }

    /////////////////////////////////////////////////////////////////////////////
    ////                       CUSTOMER                                      ////
    /////////////////////////////////////////////////////////////////////////////


    //FUNGSI UNTUK MENAMPILKAN DATA CUSTOMER
    public function datacustomer()
    {
        $result = Customer::all();
        $param = [];
        $param['result'] = $result;
        return view('fitur_admin.datacustomer', $param);
    }



}
