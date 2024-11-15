<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Menampilkan form feedback dan daftar kritik dan saran
    public function index()
    {
        // Mengambil semua data dari tabel feedback
        $feedbacks = Feedback::orderBy('created_at', 'desc')->get();

        // Mengirim data ke view
        return view('feedback', compact('feedbacks'));
    }

    // Menyimpan kritik dan saran
    public function store(Request $request)
    {
        // Validasi input form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Menyimpan data ke database
        Feedback::create([
            'name' => $validated['name'],
            'message' => $validated['message'],
        ]);

        // Redirect kembali dengan pesan sukses
        return back()->with('success', 'Kritik dan saran berhasil dikirim.');
    }
}
