<?php

namespace App\Http\Controllers;

use App\Models\ProfilDtps;
use Illuminate\Http\Request;

class ProfilDtpsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ProfilDtps::all(); // Ambil semua data
    return view('/profil-dtps/create', compact('create'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Profil DTPS';
        return view('profil-dtps.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $slug)
    {
        
        $request->validate([
            'nama_dosen' => 'required|string|max:255',
            'nidn' => 'required|string|max:20|unique:profil_dtps',
            'tanggal_lahir' => 'required|date',
            'bukti_sertifikasi' => 'required|file|mimes:pdf,jpg,png|max:5048',
        ]);

        $filePath = $request->file('bukti_sertifikasi')->store('sertifikatDTPS', 'public');
        ProfilDtps::create([
            'nama_dosen' => $request->nama_dosen,
            'nidn' => $request->nidn,
            'tanggal_lahir' => $request->tanggal_lahir,
            'bukti_sertifikasi' => $filePath,
        ]);

        return redirect()->route('profil_dtps.create')->with('success', 'Data dosen berhasil ditambahkan!');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(ProfilDtps $profilDtps)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfilDtps $profilDtpr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProfilDtps $profilDtpr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProfilDtps $profilDtps)
    {
        //
    }
}
