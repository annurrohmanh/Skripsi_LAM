<?php

namespace App\Http\Controllers;

use App\Models\ProfilDtpr;
use Illuminate\Http\Request;

class ProfilDtprController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ProfilDtpr::all(); // Ambil semua data
        
    return view('/profil-dtpr/create', compact('create'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = 'Profil DTPR';
        return view('profil-dtpr.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            'nama_dosen_dtpr' => 'required|string|max:255',
            'nidn' => 'required|string|max:20|unique:profil_dtpr',
            'ttl' => 'required|date',
            'bukti_sertifikasi' => 'required|file|mimes:pdf,jpg,png|max:5048',
        ]);
        $filePath = $request->file('bukti_sertifikasi')->store('sertifikatDTPR', 'public');
        ProfilDtpr::create([
            'nama_dosen_dtpr' => $request->nama_dosen_dtpr,
            'nidn' => $request->nidn,
            'tanggal_lahir' => $request->ttl,
            'bukti_sertifikasi' => $filePath,
        ]);
        
        return redirect()->route('profil-dtpr.create')->with('success', 'Data dosen berhasil ditambahkan!');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Profildtpr $profildtpr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProfilDtpr $profildtpr)
    {
        return view('profil-dtpr.edit', compact('profildtpr'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Fetch the existing record
        $profildtpr = ProfilDtpr::findOrFail($id);

        // Validate only provided fields
        $validatedData = $request->validate([
            'nama_dosen_dtpr' => 'sometimes|required|string|max:255',
            'nidn' => 'sometimes|required|string|max:20|unique:profil_dtpr,nidn,' . $id,
            'ttl' => 'sometimes|required|date',
            'bukti_sertifikasi' => 'nullable|file|mimes:pdf,jpg,png|max:5048',
        ]);

        // Handle file upload only if a new file is provided
        if ($request->hasFile('bukti_sertifikasi')) {
            $validatedData['bukti_sertifikasi'] = $request->file('bukti_sertifikasi')->store('sertifikatdtpr', 'public');
        } else {
            // Keep old file if no new file is uploaded
            $validatedData['bukti_sertifikasi'] = $profildtpr->bukti_sertifikasi;
        }

        // Merge old data with new values (keep old if not in request)
        $profildtpr->update([
            'nama_dosen_dtpr' => $validatedData['nama_dosen_dtpr'] ?? $profildtpr->nama_dosen_dtpr,
            'nidn' => $validatedData['nidn'] ?? $profildtpr->nidn,
            'tanggal_lahir' => $validatedData['ttl'] ?? $profildtpr->tanggal_lahir,
            'bukti_sertifikasi' => $validatedData['bukti_sertifikasi'],
        ]);

        return redirect()->route('profil-dtpr.create')->with('success', 'Data dosen berhasil diperbarui!');
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $id = ProfilDtpr::where('id', '=', $id)->delete();
        return redirect()->back()->with('success', 'Post deleted successfully.');
    }
}
