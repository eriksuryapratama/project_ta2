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
            <br><br>

            <div class="container" style="background-color: white; padding:20px;">

                {{-- PESAN ERROR --}}
                <div style="background-color: lightgreen; color:black; text-align:center;">
                    @if (Session::has('message'))
                        {{ Session::get('message') }}
                    @endif
                </div>

                <br>

                {{-- BUTTON TAMBAH --}}
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-4">
                            <h4 style="text-align: left;font-family: 'Langar', cursive;font-family: 'Russo One', sans-serif;">List Teknisi</h4>
                        </div>
                        <div class="col-2">
                            <a href="/admin/pegawai"><button type="button" class="btn btn-success">Tambah Teknisi</button></a>
                        </div>
                    </div>
                </div>

                <br>

                {{-- FORM SEARCH --}}
                <form action="/admin/caripegawai" method="GET">
                    <select name="kategori">
                        <option value="" disabled selected>-- Cari menurut --</option>
                        <option value="snama">Nama Pegawai</option>
                        <option value="stelepon">Nomor Telepon</option>
                    </select>

                    <br><br>

                    <input type="text" name="cari" placeholder="Search.." value="{{ old('cari') }}">
                    <input type="submit" class="btn btn-info" value="Cari">
                </form>

                <br>

                {{-- TABEL PEGAWAI --}}
                <table id="table" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th style="text-align:center">No.</th>
                            <th style="text-align:center;">Kode</th>
                            <th style="text-align:center;">Nama</th>
                            <th style="text-align:center;">Alamat</th>
                            <th style="text-align:center;">Telepon</th>
                            <th style="text-align:center;">Email</th>
                            <th style="text-align:center;">Username</th>
                            <th style="text-align:center;" colspan="2">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>1.</td>
                            <td>T0001</td>
                            <td>Erik Surya Pratama</td>
                            <td>Pondok Wage Indah 2</td>
                            <td>081329761969</td>
                            <td>eriksuryapratama@gmail.com</td>
                            <td>spxrick</td>
                            <td style="text-align:center"><a href=""><button type="button" class="btn btn-warning">Edit</button></a></td>
                            <td style="text-align:center"><a href=""><button type="button" class="btn btn-danger">Hapus</button></a></td>
                        </tr>

                        {{-- @if (null != $result)
                            @foreach ($result as $item)
                                <tr>
                                    <td style="text-align:center">{{$loop ->index + 1}}</td>
                                    <td style="text-align:center">{{ $item->kode_pegawai }}</td>
                                    <td>{{ $item->nama_pegawai }}</td>
                                    <td style="text-align:center">{{ $item->telepon }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td style="text-align:center"><a href="{{ url("/admin/pegawai/update/$item->id") }}"><button type="button" class="btn btn-warning">Edit</button></a></td>
                                    <td style="text-align:center"><a href="{{ url("/admin/pegawai/delete/$item->id") }}"><button type="button" class="btn btn-danger">Hapus</button></a></td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6">Tidak ada daftar Pegawai</td>
                            </tr>
                        @endif --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
