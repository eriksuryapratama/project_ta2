@extends('template_home')


{{-- Konten 1 --}}
@section('konten1')
    <div class="container">
        <img src="{{ asset('img/bg.jpg') }}" width="100%" height="100%">
    </div>
@endsection

{{-- Konten 2 --}}
@section('konten2')
<div class="container" style="border: 3px solid white;padding:20px;background-color:#2b4251">
    <h1 style="text-align: center;font-family: 'Langar', cursive;font-family: 'Russo One', sans-serif;color:white;">Data Admin</h1>
</div>
@endsection
