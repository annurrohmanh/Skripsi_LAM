<?php

namespace App\Http\Controllers;

use App\Models\RiwayatPend;
use Illuminate\Http\Request;

class RiwayatPendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=RiwayatPend::all(); // Ambil semua data
        $title='Riwayat Pendidikan';
        return view('riwayat-pendidikan.create', compact('data', 'title'));

    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data=RiwayatPend::all(); // Ambil semua data
        $title='Riwayat Pendidikan';
        return view('riwayat-pendidikan.create', compact('data', 'title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_dosen' => 'required|string|max:255',
            'nama_pt' => 'required|string|max:255',
            'prodi' => 'required|string|max:255',
            'gelar' => 'required|string|max:255',
            'thn_lulus' => 'required|string|max:255',
            'bukti_sertifikasi' => 'required|file|mimes:pdf,jpg,png|max:5048',
        ]);
        $filePath = $request->file('bukti_sertifikasi')->store('sertifikatDTPS', 'public');
        RiwayatPend::create([
            'nama_dosen_dtps' => $request->nama_dosen,
            'nama_pt' => $request->nama_pt,
            'tanggal_lahir' => $request->prodi,
            'bukti_sertifikasi' => $filePath,
        ]);
        
        return redirect()->route('profil-dtps.create')->with('success', 'Data dosen berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
