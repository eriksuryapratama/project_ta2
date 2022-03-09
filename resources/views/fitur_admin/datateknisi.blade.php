@extends('template_admin')


{{-- Konten 1 --}}
@section('konten1')
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light">
            <h5>Halo, Erik</h5>
            <p style="font-size: 14px;">Selamat datang di dashboard anda</p>
        </div>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/admin/dashboard">Dashboard</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/admin/datateknisi">Data Teknisi</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/admin/datacustomer">Data Customer</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Data Konsultasi</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Data Booking Service</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Data Emergency Service</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Laporan Review Rating</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Laporan Hasil Konsultasi</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Laporan Hasil Service</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Pengaturan Akun</a>
        </div>
    </div>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
        <!-- Top navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
            <div class="container-fluid">
                <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/home">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/konsultasi">Konsultasi</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/service">Servis</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/admin/listkategori">Profil</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/login">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page content-->
        <div class="container-fluid">
            <br>

            <div class="container" style="background-color: white; padding:20px;">

                {{-- PESAN ERROR --}}
                <div style="background-color: lightgreen; color:black; text-align:center;">
                    @if (Session::has('message'))
                        {{ Session::get('message') }}
                    @endif
                </div>

                <br>

                {{-- HEADER KONTEN --}}
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-4">
                            <h4 style="text-align: left;font-family: 'Langar', cursive;font-family: 'Russo One', sans-serif;">List Teknisi</h4>
                        </div>
                        <div class="col-2">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Teknisi</button>
                        </div>
                    </div>
                </div>

                {{-- MODAL TAMBAH --}}
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Teknisi</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>

                            <div class="modal-body" style="padding:40px 50px;">
                                <form action="/admin/teknisi" method="POST">
                                    @csrf
                                    <!-- NAMA TEKNISI -->
                                    <div class="form-group">
                                        <label for="">Nama Lengkap</label>
                                        <input type="text"  name="nama_teknisi" class="form-control" placeholder="Masukkan nama lengkap...">
                                    </div>

                                    <!-- ALAMAT TEKNISI -->
                                    <div class="form-group">
                                        <label for="">Alamat</label>
                                        <input type="text"  name="alamat_teknisi" class="form-control" placeholder="Masukkan alamat teknisi...">
                                    </div>

                                    <!-- TELEPON TEKNISI -->
                                    <div class="form-group">
                                        <label for="">Telepon</label>
                                        <input type="text" name="telepon_teknisi" class="form-control" placeholder="Masukkan telepon teknisi...">
                                    </div>

                                    <!-- EMAIL TEKNISI -->
                                    <div class="form-group">
                                        <label for="">Email</label>
                                        <input type="text" name="email_teknisi" class="form-control" placeholder="Masukkan email teknisi...">
                                    </div>

                                    <!-- USERNAME TEKNISI -->
                                    <div class="form-group">
                                        <label for="">Username</label>
                                        <input type="text" name="username_teknisi" class="form-control" placeholder="Masukkan username teknisi...">
                                    </div>

                                    <!-- PASSWORD TEKNISI -->
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <label for="">Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password...">
                                        </div>

                                        <div class="col-sm-6">
                                            <label for="">Konfirmasi Password</label>
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Konfirmasi Password...">
                                        </div>
                                    </div>

                                    {{-- TOMBOL REGISTER --}}
                                    <input type="submit" class="btn btn-success btn-block" value="Daftarkan Akun" name="btn_regis">

                                </form>

                                {{-- Pesan eror --}}
                                @if ($errors->any())
                                    <ul style="color:red;">
                                        @foreach ($errors->all() as $err)
                                            <li>{{ $err }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <br>

                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Kode</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Username</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (null != $result)
                            @foreach ($result as $item)
                                <tr>
                                    <td style="text-align:center">{{$loop ->index + 1}}</td>
                                    <td style="text-align:center">{{ $item->kode_teknisi }}</td>
                                    <td>{{ $item->nama_teknisi }}</td>
                                    <td>{{ $item->alamat_teknisi }}</td>
                                    <td  style="text-align:center">{{ $item->telepon_teknisi }}</td>
                                    <td>{{ $item->email_teknisi }}</td>
                                    <td>{{ $item->username_teknisi }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6">Tidak ada daftar </td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
            <br>
        </div>
    </div>
</div>

@endsection
