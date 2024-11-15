@extends('layouts.guest')

@section('title', '| Feedback')

@section('content')
    @include('layouts.navbar')

    <div class="w-100 h-100 d-flex flex-column align-items-center justify-content-center mt-5">
        <h1>Halaman Kritik dan Saran</h1>

        <!-- Menampilkan pesan sukses jika ada -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Kritik dan Saran -->
        <form action="{{ route('feedback.store') }}" method="POST" class="w-50">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Kritik dan Saran</label>
                <textarea class="form-control" id="message" name="message" rows="4" required>{{ old('message') }}</textarea>
                @error('message')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>

        <!-- Daftar Kritik dan Saran -->
        <div class="mt-5">
            <h2 class="text-center">Daftar Kritik dan Saran</h2>

            @if($feedbacks->isEmpty())
                <p class="text-center">Belum ada kritik dan saran yang dikirim.</p>
            @else
                <ul class="list-group">
                    @foreach ($feedbacks as $feedback)
                        <li class="list-group-item">
                            <strong>{{ $feedback->name ?? 'Anonim' }}:</strong>
                            <p>{{ $feedback->message }}</p>
                            <small class="text-muted">Dikirim pada {{ $feedback->created_at->format('d M Y, H:i') }}</small>
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
@endsection
