@extends('layouts.guest')


@section('content')

<style>
        body {
            background-size: cover;
            min-height: 100vh;
        }
</style>

@include('layouts.navbar')

     <!-- Bagian Latar Belakang Video -->
     <div class="w-screen h-screen my-0 video-bg">
        <video autoplay muted loop>
            <source src="{{ asset('img/vid.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="container text-overlay">
            <div class="row m-0">
                <div class="col-7 d-flex">
                    <div class="row align-self-center">
                        <h1 class="text-bold" style="font-size: 50px;">SELAMAT DATANG DI LAYANAN <br /> DESA CIKAMUNDING</h1>
                        <p>Permudah urusan administrasi dan pelayanan desa melalui interaksi  digital <br> antara pemerintah desa dan warga</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <!-- VISI MISI -->

    <div class="w-screen py-5" style="background-color: #F6F6F6" id="profile">
        <h3 class="px-5 text-bold text-center" style="font-size: 2rem;">Visi & Misi</h3>
        <div class="container my-5 px-5">
            <div class="visi d-flex flex-column align-items-center justify-content-center">
                <h3 class="d-inline-block text-center text-bold border-bottom-green">VISI</h3>
                <p class="text-lg text-center my-4">CIKAMUNDING,BAROKAH,PROGRESIF DAN BERKEADILAN</p>
            </div>
            <div class="misi d-flex flex-column align-items-center justify-content-center">
                <h3 class="d-inline-block text-center text-bold border-bottom-green mt-4">MISI</h3>
                <p class="text-lg text-center my-4">TERPENUHINYA HAK-HAK DASAR WARGA SEBAGAI KEWAJIBAN PEMERINTAH  DESA  YANG  AKAN  DISELENGGARAKAN SELAMA
                KURUN WAKTU 8 (Delapan) TAHUN</p>
                    
               
            </div>
        </div>
    </div>

    <div class="w-screen py-5 bg-green-pastel text-white" id="kontak">
    <h3 class="px-5 text-bold text-center">Kontak</h3>
        <div class="w-50 d-flex flex-column justify-content-center align-items-center mx-auto text-md">
            <p class="text-center my-3">Untuk informasi lebih lanjut terkait pelayanan Desa Cikamunding <br> dapat menghubungi kontak dibawah ini :</p>
            <p><i class="fa fa-phone-alt"></i> : (0252)5570973</p>
            <p><i class="fa fa-envelope"></i> : desacikamunding@gmail.com</p>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .bg-green-pastel {
            background-color: #51839C;
        }
    </style>
@endpush


@push('styles')
<style>

        .video-bg {
            position: relative;
            width: 100%;
            height: 100vh; /* Mengatur tinggi video untuk memenuhi layar penuh */
        }

        .video-bg video {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            z-index: -1; /* Agar video berada di bawah konten */
        }

        .text-overlay {
            position: relative;
            z-index: 1; /* Memastikan teks berada di atas video */
            color: white; /* Warna teks putih agar kontras dengan latar belakang video */
        }

        .container {
            position: relative;
            z-index: 1;
            padding-top: 1vh; /* Memberikan jarak dari atas agar teks tidak berada terlalu dekat dengan bagian atas layar */
        }

        
    </style>
@endpush


