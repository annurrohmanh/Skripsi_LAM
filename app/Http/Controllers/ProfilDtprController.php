<?php

namespace App\Http\Controllers;

use App\Models\ProfilDtpr;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;

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
        $query = ProfilDtpr::query(); // Gunakan query builder

        if (request('search')) {
            $query->where('nama_dosen_dtpr', 'like', "%" . request('search') . "%")
                ->orWhere('nidn', 'like', '%' . request('search') . '%')
                ->orWhere('tanggal_lahir', 'like', '%' . request('search') . '%');
        }

        $data = $query->paginate(5)->appends(request()->query()); // Ambil data setelah filter

        $title = 'Profil DTPR';
        $slug = Str::after(Str::before(Route::currentRouteName(), '.'), 'profil-');
        return view('profil-dosen.create', compact('title', 'data', 'slug'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_dosen_dtpr' => 'required|string|max:255',
            'nidn' => 'required|string|max:20|unique:profil_dtpr,nidn',
            'ttl' => 'required|date',
            'bukti_sertifikasi' => 'required|file|mimes:pdf,jpg,jpeg,png,doc,docx|max:5048',
        ]);

        // Ambil file
        $file = $request->file('bukti_sertifikasi');
        $extension = strtolower($file->getClientOriginalExtension()); // Pastikan lowercase

        // Tentukan subfolder berdasarkan ekstensi
        $subfolder = match ($extension) {
            'pdf' => 'pdf',
            'jpg', 'jpeg', 'png' => 'image',
            'doc', 'docx' => 'doc',
            default => 'other',
        };

        // Path penyimpanan
        $path = "sertifikat/dtpr/{$subfolder}";

        // Simpan file ke storage/public
        $filePath = $file->store($path, 'public');

        // Simpan ke database
        ProfilDtpr::create([
            'nama_dosen_dtpr' => $request->nama_dosen_dtpr, // Diperbaiki dari nama_dosen_dtps
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
        $profilDtpr = ProfilDtpr::findOrFail($id);

        // Validate only provided fields
        $validatedData = $request->validate([
            'nama_dosen_dtpr' => 'sometimes|required|string|max:255',
            'nidn' => 'sometimes|required|string|max:20|unique:profil_dtps,nidn,' . $id,
            'ttl' => 'sometimes|required|date',
            'bukti_sertifikasi' => 'nullable|file|mimes:pdf,jpg,png|max:5048',
        ]);

        // Handle file upload only if a new file is provided
        if ($request->hasFile('bukti_sertifikasi')) {
            $validatedData['bukti_sertifikasi'] = $request->file('bukti_sertifikasi')->store('sertifikatDTPR', 'public');
        } else {
            // Keep old file if no new file is uploaded
            $validatedData['bukti_sertifikasi'] = $profilDtpr->bukti_sertifikasi;
        }

        // Merge old data with new values (keep old if not in request)
        $profilDtpr->update([
            'nama_dosen_dtpr' => $validatedData['nama_dosen_dtps'] ?? $profilDtpr->nama_dosen_dtps,
            'nidn' => $validatedData['nidn'] ?? $profilDtpr->nidn,
            'tanggal_lahir' => $validatedData['ttl'] ?? $profilDtpr->tanggal_lahir,
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
