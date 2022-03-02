<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    //FUNGSI UNTUK MENAMPILKAN DATA TEKNISI
    public function datateknisi()
    {
        return view('fitur_admin.datateknisi');
    }

    //FUNGSI UNTUK MENAMPILKAN DATA CUSTOMER
    public function datacustomer()
    {
        return view('fitur_admin.datacustomer');
    }

}
