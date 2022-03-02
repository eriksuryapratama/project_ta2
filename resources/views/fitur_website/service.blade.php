@extends('template_home')


{{-- Konten 1 --}}
@section('konten1')
    <div class="container">
        <div class="row">
            {{-- KOLOM KIRI --}}
            <div class="col-sm" style="border: 1px solid white;padding:20px;background-color:#2b4251;height:500px;margin:10px">
                <div class="container">
                    <h5 style="text-align: center;font-family: 'Langar', cursive;font-family: 'Russo One', sans-serif;color:white">Booking Service Bengkel</h5>
                </div>

                <br>

                <div class="container">
                    <img src="{{ asset('img/bg.jpg') }}" width="100%" height="100%">
                </div>

                <br>

                <div class="container">
                    <button type="button" style="width:100%" class="btn btn-success">Pesan Sekarang</button>
                </div>
            </div>

            {{-- KOLOM TENGAH --}}
            <div class="col-sm" style="border: 1px solid white;padding:20px;background-color:#2b4251;height:500px;margin:10px">
                <div class="container">
                    <h5 style="text-align: center;font-family: 'Langar', cursive;font-family: 'Russo One', sans-serif;color:white">Booking Home Service</h5>
                </div>

                <br>

                <div class="container">
                    <img src="{{ asset('img/bg.jpg') }}" width="100%" height="100%">
                </div>

                <br>

                <div class="container">
                    <button type="button" style="width:100%" class="btn btn-success">Pesan Sekarang</button>
                </div>
            </div>

            {{-- KOLOM KANAN --}}
            <div class="col-sm" style="border: 1px solid white;padding:20px;background-color:#2b4251;height:500px;margin:10px">
                <div class="container">
                    <h5 style="text-align: center;font-family: 'Langar', cursive;font-family: 'Russo One', sans-serif;color:white">Emergency Service</h5>
                </div>

                <br>

                <div class="container">
                    <img src="{{ asset('img/bg.jpg') }}" width="100%" height="100%">
                </div>

                <br>

                <div class="container">
                    <button type="button" style="width:100%" class="btn btn-success">Pesan Sekarang</button>
                </div>
            </div>
        </div>
    </div>
@endsection
