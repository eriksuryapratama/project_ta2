@extends('template_login')


{{-- Isi Halaman --}}
@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5" style="background-color:#2b4251">
                    <div class="card-body p-4 p-sm-5">

                        {{-- PESAN ERROR --}}
                        <div style="background-color: red; color:black; text-align:center;">
                            @if (Session::has('message'))
                                {{ Session::get('message') }}
                            @endif
                        </div>

                        <br>

                        <h5 class="card-title text-center mb-5 fw-light fs-5" style="font-family: 'Langar', cursive;font-family: 'Russo One', sans-serif;color:white;">Register</h5>
                        <form action="/register" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <label for="" style="color: white">Nama Lengkap</label>
                                <input type="text" name="nama" class="form-control" id="" placeholder="Masukkan nama anda...">
                            </div>

                            <div class="form-floating mb-3">
                                <label for="" style="color: white">Alamat</label>
                                <input type="text" name="alamat" class="form-control" id="" placeholder="Masukkan alamat anda...">
                            </div>

                            <div class="form-floating mb-3">
                                <label for="" style="color: white">Telepon</label>
                                <input type="text" name="telepon" class="form-control" id="" placeholder="Masukkan telepon anda...">
                            </div>

                            <div class="form-floating mb-3">
                                <label for="" style="color: white">Email</label>
                                <input type="text" name="email" class="form-control" id="" placeholder="Masukkan email anda...">
                            </div>

                            <div class="form-floating mb-3">
                                <label for="" style="color: white">Username</label>
                                <input type="text" name="username" class="form-control" id="" placeholder="Masukkan username anda...">
                            </div>

                            <div class="form-floating mb-3">
                                <label for="" style="color: white">Password</label>
                                <input type="password" name="password" class="form-control" id="" placeholder="Masukkan password anda...">
                            </div>

                            <div class="form-floating mb-3">
                                <label for="" style="color: white">Confirm Password</label>
                                <input type="password" name="password_confirmation" class="form-control" id="" placeholder="Masukkan kembali password anda...">
                            </div>

                            <br>

                            <div class="d-grid">
                                <input type="submit" name="btn_regis" class="btn btn-primary btn-login text-uppercase fw-bold" value="Register" style="width: 100%">
                            </div>

                            <br>

                            <div class="form-check mb-3" style="text-align:center;">
                                <label for=""  style="color:white;">Sudah punya akun?
                                    <a href="/login">Login Sekarang!</a>
                                </label>
                            </div>
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
    </div>
@endsection
