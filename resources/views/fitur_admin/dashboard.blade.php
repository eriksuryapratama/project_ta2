@extends('template_admin')


{{-- Konten 1 --}}
@section('konten1')
<div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <div class="border-end bg-white" id="sidebar-wrapper">
        <div class="sidebar-heading border-bottom bg-light">
            <h5>Halo, Erik Surya Pratama</h5>
        </div>
        <div class="list-group list-group-flush">
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/admin/datakaryawan">Data Teknisi</a>
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
            <br><br><br>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('img/bg.jpg') }}" width="100%" height="100%">
                        <div class="card-body" style="text-align:center;">
                            <h3>Laporan Hasil Konsultasi</h3>
                            <p>Smart Auto Garage</p>
                            <p><a href="laporanBarang.php" class="btn btn-primary" style="background-color:#375ece; border:1px solid #375ece" role="button">LIHAT</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('img/bg.jpg') }}" width="100%" height="100%">
                        <div class="card-body" style="text-align:center;">
                            <h3>Laporan Hasil Service</h3>
                            <p>Smart Auto Garage</p>
                            <p><a href="mutasi.php" class="btn btn-primary" style="background-color:#375ece; border:1px solid #375ece" role="button">LIHAT</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="{{ asset('img/bg.jpg') }}" width="100%" height="100%">
                        <div class="card-body" style="text-align:center;">
                            <h3>Laporan Review Rating</h3>
                            <p>Smart Auto Garage</p>
                            <p><a href="listRetur.php" class="btn btn-primary" style="background-color:#375ece; border:1px solid #375ece" role="button">LIHAT</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
