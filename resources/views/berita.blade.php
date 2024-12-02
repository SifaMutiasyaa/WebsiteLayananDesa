@extends('layouts.guest')

@section('title', '| Berita')

@section('content')
    @include('layouts.navbar')

    <div class="container mt-5">
        <h1 class="text-center mb-4" style="font-weight: bold;">Update Terkini Seputar Desa Cikamunding</h1>
        <div class="row">
            @foreach ($berita as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img src="{{ $item['thumbnail'] }}" class="card-img-top" alt="Thumbnail">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ $item['judul'] }}</h5>
                            <p class="card-text">{{ $item['excerpt'] }}</p>
                            <div class="mt-auto">
                                <a href="{{ $item['url'] }}" target="_blank" class="btn btn-primary btn-sm float-right">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@push('styles')
<style>
    .card-title {
        font-size: 1.1rem;
        font-weight: bold;
    }
    .card-text {
        font-size: 0.9rem;
        color: #555;
    }
    .btn-primary {
        background-color: #51839C;
        border: none;
    }
    .btn-primary:hover {
        background-color: #3a6173;
    }
    .card-img-top {
        object-fit: cover;
        width: 100%;
        height: 200px; 
    }
    .card-body {
        display: flex;
        flex-direction: column;
    }
    .mt-auto {
        margin-top: auto;
    }
</style>
@endpush
