<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use Barryvdh\DomPDF\Facade\Pdf;


class PendaftaranController extends Controller
{
    public function create()
    {
        return view('pendaftaran.form');
    }

    public function exportPDF(Request $request)
    {
        $data = $request->all();

        // Jika hobi tidak diisi, pastikan tidak error
        $data['hobi'] = isset($data['hobi']) ? $data['hobi'] : [];

        // Buat PDF menggunakan view yang sudah dibuat
        $pdf = Pdf::loadView('pendaftaran.pdf', ['pendaftaran' => (object) $data]);

        // Tampilkan PDF langsung di browser
        return $pdf->stream('pendaftaran.pdf');
    }

}
