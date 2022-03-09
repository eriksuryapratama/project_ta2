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

                {{-- HEADER --}}
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-4">
                            <h4 style="text-align: left;font-family: 'Langar', cursive;font-family: 'Russo One', sans-serif;">List Customer</h4>
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
                                    <td style="text-align:center">{{ $item->kode_customer }}</td>
                                    <td>{{ $item->nama_customer }}</td>
                                    <td>{{ $item->alamat_customer }}</td>
                                    <td  style="text-align:center">{{ $item->telepon_customer }}</td>
                                    <td>{{ $item->email_customer }}</td>
                                    <td>{{ $item->username_customer }}</td>
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
