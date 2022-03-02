@extends('template_konsultasi')


{{-- Konten 1 --}}
@section('konten1')
    <div class="container">
        <div class="row">

            {{-- KOLOM KIRI --}}
            <div class="col">
                <div class="container" style="border: 3px solid white;padding:20px;background-color:#2b4251;height:625px">
                    {{-- PESAN ERROR --}}
                    <div style="background-color: red; color:black; text-align:center;">
                        @if (Session::has('message'))
                            {{ Session::get('message') }}
                        @endif
                    </div>

                    <br>

                    <h5 class="card-title text-center mb-5 fw-light fs-5" style="font-family: 'Langar', cursive;font-family: 'Russo One', sans-serif;color:white;">Layanan Konsultasi</h5>

                    {{-- Form kirim pesan --}}
                    <form action="/konsultasi" method="POST">
                        @csrf
                        <div class="form-floating mb-3">
                            <label for="" style="color: white">Pilih Layanan</label>
                            <select name="role" class="form-control">
                                <option value="" disabled selected>-- Pilih Layanan --</option>
                                <option value="layanan1">Layanan 1</option>
                                <option value="layanan2">Layanan 2</option>
                                <option value="layanan3">Layanan 3</option>
                            </select>
                        </div>

                        <div class="form-floating mb-3">
                            <label for="" style="color: white">Pesan</label>
                            <textarea name="pesan_konsul" class="form-control rounded-0" rows="10" placeholder="Masukkan pesan anda..."></textarea>
                        </div>

                        <br>

                        {{-- Tombol Kirim Pesan --}}
                        <div class="d-grid">
                            <input type="submit" name="btn_kirimPesan" class="btn btn-primary btn-login text-uppercase fw-bold" value="Kirim Pesan" style="width: 100%">
                        </div>

                        <br>

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

            {{-- KOLOM KANAN --}}
            <div class="col">
                <div class="container" style="border: 3px solid white;padding:20px;background-color:#2b4251;height:625px">

                    <br>
                    
                    <h5 class="card-title text-center mb-5 fw-light fs-5" style="font-family: 'Langar', cursive;font-family: 'Russo One', sans-serif;color:white;">Cara Kerja</h5>

                    <p style="color: white">1. JELASKAN KEBUTUHAN ANDA</p>
                    <p style="color: white">Jelaskan masalah dan kerusakan mobil anda atau service apa yang anda perlukan melalui form yang tersedia.</p>

                    <br>

                    <p style="color: white">2. KONSULTASI DENGAN ADMIN</p>
                    <p style="color: white">Admin kami akan menghubungi anda untuk memberikan konsultasi untuk servis yang anda butuhkan.</p>

                    <br>

                    <p style="color: white">3. JADWALKAN SERVIS ANDA</p>
                    <p style="color: white">Setelah konsultasi, anda bisa langsung menjadwalkan service anda</p>


                </div>
            </div>
          </div>
    </div>
@endsection
