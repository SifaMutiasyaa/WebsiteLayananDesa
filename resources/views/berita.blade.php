@extends('layouts.guest')

@section('title', '| Berita')

@section('content')
    @include('layouts.navbar') <!-- Navbar akan muncul di halaman -->

    <div class="container mt-5">
        <h1 class="text-center">Laman Berita</h1>
        <p class="text-center">Halaman ini akan menampilkan daftar berita terbaru dari Desa Cikamunding.</p>
        <!-- Nanti Anda bisa menambahkan berita di sini -->
    </div>
@endsection
