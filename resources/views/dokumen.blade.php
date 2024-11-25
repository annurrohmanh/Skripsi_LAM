{{-- @extends('components.layout') --}}
{{-- {{ dd($content) }} --}}
{{-- @section('content') --}}
{{-- @section('title', 'Profil DTPS') --}}
<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h2 class="text-xl">Haloo ini {{ $nama }}</h2>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <section class="bg-white dark:bg-gray-900">
        <div class="mx-auto max-w-2xl px-4 py-8 lg:py-16">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Profil DTPS</h2>
            <form action="{{ route('profil_dtps.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                    <div class="sm:col-span-2">
                        <label for="nama_dosen"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama
                            Dosen</label>
                        <input type="text" name="nama_dosen" id="nama_dosen" value="{{ old('nama_dosen') }}"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                            placeholder="Nama Dosen" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="nidn"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">NIDN</label>
                        <input type="text" name="nidn" id="nidn" value="{{ old('nidn') }}"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                            placeholder="NIDN" required="">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="tanggal_lahir"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Tanggal Lahir</label>
                        <input name="tanggal_lahir" id="tanggal_lahir" type="date" value="{{ old('tanggal_lahir') }}"
                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 ps-10 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500"
                            placeholder="d/m/y" required />
                    </div>
                    <div class="sm:col-span-2">
                        <label for="bukti_sertifikasi"
                            class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Bukti Sertifikasi
                            Dosen</label>
                        <label for="dropzone-file"
                            class="flex h-64 w-full cursor-pointer flex-col items-center justify-center rounded-lg border-2 border-dashed border-gray-300 bg-gray-50 hover:bg-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                            <div class="flex flex-col items-center justify-center pb-6 pt-5">
                                <svg class="mb-4 h-8 w-8 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                                </svg>
                                <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                        class="font-semibold">Click to upload</span> or drag and drop</p>
                                <p class="text-xs text-gray-500 dark:text-gray-400">PDF / PNG / JPG (MAX.5mb)</p>
                            </div>
                            <input name='bukti_sertifikasi' id="dropzone-file" type="file" class="hidden" />
                        </label>
                    </div>
                </div>
                <button type="submit"
                    class="mt-4 inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 sm:mt-6">
                    Simpan
                </button>
        </div>
        </form>
        </div>
    </section>
</x-layout>
