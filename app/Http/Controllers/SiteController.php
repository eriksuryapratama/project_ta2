<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
