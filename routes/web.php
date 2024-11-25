<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\ProfilDtps;
use App\Http\Controllers\ProfilDtpsController;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/posts', function () {
    // $posts= Post::with('author', 'category')->latest()->get();
    $posts = Post::latest()->get();
    return view('posts', [
        'title' => 'Kriteria - LAM INFOKOM', 
        'nama' => 'MAANN',
        'posts' => $posts,
        'data' => [
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
            ]
    ]);
});

Route::get('/dokumen', function () {
    return view('dokumen', ['title' => 'Dokumen Pendukung', 'nama' => 'maman']);
});

Route::get('/posts/{post:slug}', function (Post $post) {
    
    // $post = Post::find($id_kriteria);
    
    return view('post' , ['title' => $post->title , 'post' => $post]);
}); 

Route::get('/profil-dtps/{create:slug}', function (ProfilDtps $profilDtps) {    
    $data = ProfilDtps::latest()->get()->toArray();
    return view('profil-dtps/create', data: [
        'title' => 'profil DTPS', 
        'data' => $data,
    ]);
});

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