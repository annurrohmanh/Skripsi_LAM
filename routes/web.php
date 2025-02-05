<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\ProfilDtps;
use App\Models\ProfilDtpr;
use App\Http\Controllers\ProfilDtpsController;
use App\Http\Controllers\ProfilDtprController;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    // $posts= Post::with('author', 'category')->latest()->get();
    $posts = Post::latest()->get();
    return view('posts', [
        'title' => 'Kriteria - LAM INFOKOM', 
        'kriteria' => 
            [
                        'kriteria4' => 'Kriteria 4',
                        'kriteria6' => 'Kriteria 6',
            ],
            
                        
        'nama' => 'MAANN',
        'posts' => $posts,
        'data4' => [
            [
                'judul' => 'Profil DTPS',
                'deskripsi' => 'Berisi mengenai data profil Dosen Tetap Program Studi',
                'slug' => 'profil-dtps'
            ],
            [
                'judul' => 'Profil DTPR',
                'deskripsi' => 'Berisi mengenai data profil Dosen Tetap Penghitung Rasio',
                'slug' => 'profil-dtpr'
            ],
            [
                'judul' => 'Riwayat Pendidikan DTPR',
                'deskripsi' => 'Berisi mengenai data riwayat pendidikan Dosen Tetap Penghitung Rasio',
                'slug' => 'riwayat-pendidikan-dtpr'
            ],
            [
                'judul' => 'Asosiasi Keanggotaan Dosen',
                'deskripsi' => 'Berisi mengenai data asosiasi keanggotaan setiap dosen',
                'slug' => 'asosiasi-keanggotaan-dosen'
            ],
            [
                'judul' => 'Beban DTPS',
                'deskripsi' => 'Berisi mengenai data beban dari setiap Dosen Tetap Penghitung Rasio',
                'slug' => 'beban-dtps'
            ],
            [
                'judul' => 'Dosen Pembimbing Tugas Akhir',
                'deskripsi' => 'Berisi mengenai data dosen pembimbing tugas akhir atau skripsi',
                'slug' => 'dosen-pembimbing-tugas-akhir'
            ],
            [
                'judul' => 'Jabatan Fungsi DTPR',
                'deskripsi' => 'Berisi mengenai data jabatan fungsi dari setiap Dosen Tetap Penghitung Rasio',
                'slug' => 'jabatan-fungsi-dtpr'
            ],
            [
                'judul' => 'Rekognisi DTPR',
                'deskripsi' => 'Berisi mengenai data rekognisi dari setiap Dosen Tetap Penghitung Rasio',
                'slug' => 'rekognisi-dtpr'
            ],
            [
                'judul' => 'Kompetesi DTPR',
                'deskripsi' => 'Berisi mengenai data kompetensi dari setiap Dosen Tetap Penghitung Rasio',
                'slug' => 'kompetesi-dtpr'
            ],
            [
                'judul' => 'Profil Tenaga Kependidikan',
                'deskripsi' => 'Berisi mengenai data profil dari setiap tenaga kependidikan',
                'slug' => 'profil-tenaga-kependidikan'
            ],
            [
                'judul' => 'Pengembangan Tenaga Kependidikan',
                'deskripsi' => 'Berisi mengenai data pengembangan dari setiap tenaga kependidikan',
                'slug' => 'pengembangan-tenaga-kependidikan'
            ]
            ],
        'data6' => [
            [
                'judul' => 'Dokumentasi Laboratorium Prodi Sistem Informasi',
                'deskripsi' => 'Berisi mengenai data dokumentasi laboratorium',
                'slug' => 'dok-laboratorium-si' 
            ],
            [
                'judul' => 'Modul Praktikum',
                'deskripsi' => 'Berisi mengenai modul praktikum program studi',
                'slug' => 'modul-praktikum' 
            ],
            [
                'judul' => 'Survei Kepuasan Mahasiswa',
                'deskripsi' => 'Berisi mengenai kepuasan mahasiswa program studi',
                'slug' => 'survei-kepuasan-mhs' 
            ],
            [
                'judul' => 'Dokumentasi Rapat Penjaminan Mutu',
                'deskripsi' => 'Berisi mengenai dokumentasi rapat penjaminan mutu program studi',
                'slug' => 'dok-rapat-penjaminan-mutu' 
            ],
            [
                'judul' => 'Dokumen Penjaminan Mutu Internal',
                'deskripsi' => 'Berisi mengenai dokumen penjaminan mutu internal program studi',
                'slug' => 'dok-pmi'
            ],
            [
                'judul' => 'Dokumentasi Kurikulum Eksisting',
                'deskripsi' => 'Berisi mengenai dokumentasi kurikulum eksisting program studi',
                'slug' => 'dok-kurikulum-eksisting'
            ],
            [
                'judul' => 'Dokumentasi Kunjungan Industri',
                'deskripsi' => 'Berisi mengenai dokumentasi kunjungan ke industri',
                'slug' => 'dok-kunjungan-industri'
            ],
            [
                'judul' => 'Dokumentasi Diskusi Dengan Akademisi PT Lain',
                'deskripsi' => 'Berisi mengenai dokumentasi diskusi dengan akademisi Perguruan Tinggi lainnya',
                'slug' => 'dok-diskusi-akademisi-PT-lain'
            ],
            [
                'judul' => 'Absensi dan BAP',
                'deskripsi' => 'Berisi mengenai absensi dan BAP(Berita Acara Perkuliahan) program studi',
                'slug' => 'absensi-dan-bap'
            ],
            [
                'judul' => 'Data Bahan Ajar',
                'deskripsi' => 'Berisi mengenai data bahan ajar program studi',
                'slug' => 'data-bahan-ajar'
            ],
            [
                'judul' => 'Data Assesmen Pembelajaran',
                'deskripsi' => 'Berisi mengenai data assesmen program studi',
                'slug' => 'data-assesmen-pembelajaran'
            ],
            [
                'judul' => 'Dokumentasi Bimbingan',
                'deskripsi' => 'Berisi mengenai data bimbingan antar mahasiswa dan dosen program studi',
                'slug' => 'dok-bimbingan'
            ],
            [
                'judul' => 'Capstone Project',
                'deskripsi' => 'Berisi mengenai capstone project program studi',
                'slug' => 'capstone-project'
            ],
            [
                'judul' => 'Dokumentasi Penyusunan RPS',
                'deskripsi' => 'Berisi mengenai dokumentasi penyusunan RPS(Rencana Pembelajaran Semester) program studi',
                'slug' => 'dok-penyusunan-rps'
            ],
            [
                'judul' => 'Dokumentasi Rapat Koorprodi dan Mahasiswa',
                'deskripsi' => 'Berisi mengenai dokumentasi rapat koordinator program studi dan mahasiswa',
                'slug' => 'dok-rapat-koorprodi-mahasiswa'
            ],
            [
                'judul' => 'Dokumentasi Rapat Koorprodi Dengan Ketua Jurusan',
                'deskripsi' => 'Berisi mengenai dokumentasi rapat koordinator program studi dan ketua jurusan',
                'slug' => 'dok-rapat-koorprodi-kajur'
            ],
            [
                'judul' => 'Dokumentasi Rapat Koorprodi Dengan Dosen',
                'deskripsi' => 'Berisi mengenai dokumentasi rapat koordinator program studi dan dosen program studi',
                'slug' => 'dok-rapat-koorprodi-dosen'
            ],
            [
                'judul' => 'Dokumentasi Rapat Sosialisasi RPS',
                'deskripsi' => 'Berisi mengenai dokumentasi rapat sosialisasi RPS(Rencana Pembelajaran Semester) program studi',
                'slug' => 'dok-rapat-sosialisasi-rps'
            ],
            [
                'judul' => 'Dokumen Mekanisme Integrasi Topik Penelitian dan PkM',
                'deskripsi' => 'Berisi mengenai dokumen mekanisme integrasi topik penelitian PkM program studi',
                'slug' => 'dok-mekanisme-itp-pkm'
            ],
            [
                'judul' => 'Dokumentasi Rapat Pimpinan UTM',
                'deskripsi' => 'Berisi mengenai dokumentasi rapat pimpinan universitas',
                'slug' => 'dok-rapat-pimpinan-univ'
            ],
            [
                'judul' => 'Dokumentasi Rapat Pimpinan Dekanat Fakultas Teknik',
                'deskripsi' => 'Berisi mengenai dokumentasi rapat pimpinan dekanat fakultas',
                'slug' => 'dok-rapat-pimpinan-dekanat'
            ],
            [
                'judul' => 'Dokumentasi Pengajaran Dalam Kelas',
                'deskripsi' => 'Berisi mengenai dokumentasi di dalam kelas',
                'slug' => 'dok-pengajaran-kelas'
            ],
            [
                'judul' => 'Dokumentasi Pengajaran Luar Kelas',
                'deskripsi' => 'Berisi mengenai dokumentasi di luar kelas',
                'slug' => 'dok-pengajaran-luar-kelas'
            ],
            [
                'judul' => 'Integrasi Topik Penelitian dan PKM dalam pembelajaran',
                'deskripsi' => 'Berisi mengenai topik penelitian dan Program Kreativitas Mahasiswa dalam pembelajaran',
                'slug' => 'itp-pkm-pembelajaran'
            ],
            [
                'judul' => 'Dokumentasi Conferances',
                'deskripsi' => 'Berisi kumpulan makalah akademis yang diterbitkan dalam konteks konferensi atau lokakarya akademis',
                'slug' => 'dok-conferences'
            ],
            [
                'judul' => 'Data WAG Program Studi',
                'deskripsi' => 'Berisi daftar mata kuliah beserta nama dosen pengajar dan kelasnya',
                'slug' => 'wag-prodi'
            ],
            [
                'judul' => 'Dokumentasi AMI',
                'deskripsi' => 'Berisi dokumentasi AMI(Audit Mutu Internal) program studi',
                'slug' => 'dok-ami'
            ],
            [
                'judul' => 'Dokumentasi International Guest Lecture',
                'deskripsi' => 'Berisi dokumentasi kegiatan perkuliahan yang diadakan oleh dosen tamu asing atas undangan penyelenggara',
                'slug' => 'dok-international-guest-lecture'
            ],
            [
                'judul' => 'Data Kegiatan Penelitian Mahasiswa',
                'deskripsi' => 'Berisi data kegiatan penelitian-penelitian yang dilakukan oleh mahasiswa',
                'slug' => 'data-kegitan-penelitian-mahasiswa'
            ],
            [
                'judul' => 'Data Mata Kuliah DTPR',
                'deskripsi' => 'Berisi data mata kuliah DTPR(Dosen Tetap Penghitung Rasio)',
                'slug' => 'data-mata-kuliah-dtpr'
            ],
            [
                'judul' => 'Dokumentasi Ruang Baca',
                'deskripsi' => 'Berisi dokumentasi ruang baca program studi',
                'slug' => 'dok-ruang-baca'
            ],
            [
                'judul' => 'Data Peninjauan Kurikulum',
                'deskripsi' => 'Berisi data peninjauan kurikulum program studi',
                'slug' => 'data-peninjauan-kurikulum'
            ],
            [
                'judul' => 'Dokumentasi SISRI',
                'deskripsi' => 'Berisi dokumentasi SISRI(Sistem Informasi Skripsi)',
                'slug' => 'dok-sisri'
            ],
            [
                'judul' => 'Data Notulen Rapat SI',
                'deskripsi' => 'Berisi data notulen rapat Sistem Informasi',
                'slug' => 'data-rapat-si'
            ],
            [
                'judul' => 'Dokumentasi Pengabdian Masyarakat',
                'deskripsi' => 'Berisi dokumentasi pengabdian masyarakat',
                'slug' => 'dok-pengabdian-masyarakat'
            ],
            [
                'judul' => 'Hasil Similarity Tugas Akhir Mahasiswa',
                'deskripsi' => 'Berisi hasil similarity tugas akhir mahasiswa',
                'slug' => 'hasil-similarity-ta-mahasiswa'
            ],
            [
                'judul' => 'Dokumentasi Praktik Baik',
                'deskripsi' => 'Berisi dokumentasi praktik baik pada program studi',
                'slug' => 'dok-praktik-baik'
            ],
            [
                'judul' => 'Dokumentasi Praktik Buruk',
                'deskripsi' => 'Berisi dokumentasi praktik buruk pada program studi',
                'slug' => 'dok-praktik-buruk'
            ],
            [
                'judul' => 'Dokumentasi Praktik Baru',
                'deskripsi' => 'Berisi dokumentasi praktik baru pada program studi',
                'slug' => 'dok-praktik-baru'
            ],
            [
                'judul' => 'Dokumen Rencana Strategis',
                'deskripsi' => 'Berisi dokumen rencana strategis program studi',
                'slug' => 'dok-rencana-strategis'
            ],
            [
                'judul' => 'Dokumen Rencana Operasional',
                'deskripsi' => 'Berisi dokumen rencana operasional program studi',
                'slug' => 'dok-rencana-operasional'
            ],
            [
                'judul' => 'Dokumen Kurikulum KKNI',
                'deskripsi' => 'Berisi dokumen kurikulum KKNI(Kerangka Kualifikasi Nasional Indonesia)',
                'slug' => 'dok-kurikulum-kkni'
            ],
        ]
    ]);
});
//  update
Route::post('/profil-dtps', [ProfilDtpsController::class, 'store'])->name('profil-dtps.store');
Route::put('/profil-dtps/{id}', [ProfilDtpsController::class, 'update'])->name('profil-dtps.update');
Route::delete('/profil-dtps/{id}', [ProfilDtpsController::class, 'destroy'])->name('profil-dtps.destroy');

use App\Http\Controllers\PoshtController;

Route::get('/ps', [PoshtController::class, 'index'])->name('ps.index');
Route::post('/ps', [PoshtController::class, 'store'])->name('ps.store');
Route::put('/ps/{post}', [PoshtController::class, 'update'])->name('ps.update');
Route::delete('/ps/{post}', [PoshtController::class, 'destroy'])->name('ps.destroy');


// Route::resource('/profil-dtps', [ProfilDtpsController::class]);

Route::get('/dokumen', function () {
    return view('dokumen', ['title' => 'Dokumen Pendukung', 'nama' => 'maman']);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    
    // $post = Post::find($id_kriteria);
    
    return view('post' , ['title' => $post->title , 'post' => $post]);
}); 

Route::get('/profil-dtps/{create:slug}', function (ProfilDtps $profilDtps) {    
    $data = ProfilDtps::latest()->get();
    
    return view('profil-dtps/create', data: [
        'title' => 'Profil DTPS', 
        'data' => $data,
    ]);
});

Route::get('/profil-dtpr/{create:slug}', function (ProfilDtpr $profilDtpr) {    
    $data = ProfilDtpr::latest()->get()->toArray();
    return view('profil-dtpr/create', data: [
        'title' => 'Profil DTPR',
        'data' => $data,
    ]);
});

Route::get('/profil-dtpr/create', [ProfilDTPRController::class, 'create'])->name('profil-dtpr.create');

Route::get('/authors/{user:username}', function (User $user) {
    // $post = $user->posts->load('author', 'category'); //lazy eager loading
    return view('posts' , ['title' => count($user->posts) . ' Dokumen dari ' . $user->name, 'posts' => $user->posts , 'nama'=> 'mann']);
}); 

Route::get('/categories/{category:slug}', function (Category $category) {
    // $cat = $category->posts->load('author', 'category');
    
    return view('posts' , ['title' =>' Kriteria ' . $category->name, 'posts' => $category->posts , 'nama'=> 'mann']);
}); 


// Route::get('/profil_dtps/create', function () {
//     return view('create', ['title' => 'Dokumen Pendukung']);
// });

//ProfilDTPS
Route::get('profil-dtps/create', [ProfilDtpsController::class, 'create'])->name('profil-dtps.create');  
// Route::post('profil_dtps/store.', [ProfilDtpsController::class, 'store'])->name('profil_dtps.store');

// Route::get('/profil_dtps', [ProductController::class, 'index'])->name('products.index');