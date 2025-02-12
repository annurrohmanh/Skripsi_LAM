{{-- @extends('components.layout')
@section('content')
@section('title', 'Profil DTPS') --}}

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <section class="bg-gray-50 p-3 dark:bg-gray-900 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
                <div
                    class="flex flex-col items-center justify-between space-y-3 p-4 md:flex-row md:space-x-4 md:space-y-0">
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg aria-hidden="true" class="h-5 w-5 text-gray-500 dark:text-gray-400"
                                        fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search"
                                    class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 pl-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                    placeholder="Search" required="">
                            </div>
                        </form>
                    </div>
                    <div
                        class="flex w-full flex-shrink-0 flex-col items-stretch justify-end space-y-2 md:w-auto md:flex-row md:items-center md:space-x-3 md:space-y-0">
                        <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" type="button"
                            class="flex items-center justify-center rounded-lg bg-primary-700 px-4 py-2 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                            <svg class="mr-2 h-3.5 w-3.5" fill="currentColor" viewbox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Tambah
                        </button>
                        <div class="flex w-full items-center space-x-3 md:w-auto">
                            <button id="actionsDropdownButton" data-dropdown-toggle="actionsDropdown"
                                class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 md:w-auto"
                                type="button">
                                <svg class="-ml-1 mr-1.5 h-5 w-5" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                </svg>
                                Actions
                            </button>
                            <div id="actionsDropdown"
                                class="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="actionsDropdownButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mass
                                            Edit</a>
                                    </li>
                                </ul>
                                <div class="py-1">
                                    <a href="#"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white">Delete
                                        all</a>
                                </div>
                            </div>
                            <button id="filterDropdownButton" data-dropdown-toggle="filterDropdown"
                                class="flex w-full items-center justify-center rounded-lg border border-gray-200 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700 md:w-auto"
                                type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                                    class="mr-2 h-4 w-4 text-gray-400" viewbox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                        clip-rule="evenodd" />
                                </svg>
                                Filter
                                <svg class="-mr-1 ml-1.5 h-5 w-5" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                                </svg>
                            </button>
                            <div id="filterDropdown"
                                class="z-10 hidden w-48 rounded-lg bg-white p-3 shadow dark:bg-gray-700">
                                <h6 class="mb-3 text-sm font-medium text-gray-900 dark:text-white">Choose brand</h6>
                                <ul class="space-y-2 text-sm" aria-labelledby="filterDropdownButton">
                                    <li class="flex items-center">
                                        <input id="apple" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600">
                                        <label for="apple"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Kriteria 4
                                            (jumlah)</label>
                                    </li>
                                    <li class="flex items-center">
                                        <input id="fitbit" type="checkbox" value=""
                                            class="h-4 w-4 rounded border-gray-300 bg-gray-100 text-primary-600 focus:ring-2 focus:ring-primary-500 dark:border-gray-500 dark:bg-gray-600 dark:ring-offset-gray-700 dark:focus:ring-primary-600">
                                        <label for="fitbit"
                                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-100">Kriteria 6
                                            (jumlah)</label>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">NO</th>
                                <th scope="col" class="px-4 py-3">Nama Dosen</th>
                                <th scope="col" class="px-4 py-3">Nama Perguruan Tinggi</th>
                                <th scope="col" class="px-4 py-3">Program Studi</th>
                                <th scope="col" class="px-4 py-3">Gelar</th>
                                <th scope="col" class="px-4 py-3">Tahun Kelulusan</th>
                                <th scope="col" class="px-4 py-3">Bukti Ijazah</th>
                                <th scope="col" class="px-4 py-3">Waktu Upload</th>
                                <th scope="col" class="px-4 py-3">Waktu Update</th>
                                <th scope="col" class="px-4 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $index => $item)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3">{{ $index + 1 }}</td>
                                    <td class="px-4 py-3">{{ $item['nama_dosen'] }}</td>
                                    <td class="px-4 py-3">{{ $item['nama_pt'] }}</td>
                                    <td class="px-4 py-3">{{ $item['prodi'] }}</td>
                                    <td class="px-4 py-3">{{ $item['gelar'] }}</td>
                                    <td class="px-4 py-3">{{ $item['th_lulus'] }}</td>
                                    <td class="px-4 py-3">
                                        <a data-modal-value="{{ $item['bukti_ijazah'] }}"
                                            class="cursor-pointer text-blue-600" data-modal-target="ijazah-modal"
                                            data-modal-toggle="ijazah-modal">
                                            Bukti Ijazah
                                        </a>
                                    </td>
                                    <td class="px-4 py-3">
                                        {{ $item['created_at'] }}</td>
                                    <td class="px-4 py-3">
                                        {{ $item['updated_at'] }}</td>
                                    <td class="flex items-center justify-end px-4 py-3">
                                        <button id="dropdown-button-{{ $index }}"
                                            data-dropdown-toggle="dropdown-menu-{{ $index }}"
                                            class="inline-flex items-center rounded-lg p-0.5 text-center text-sm font-medium text-gray-500 hover:text-gray-800 focus:outline-none dark:text-gray-400 dark:hover:text-gray-100"
                                            type="button">
                                            <svg class="h-5 w-5" aria-hidden="true" fill="currentColor"
                                                viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                            </svg>
                                        </button>
                                        <div id="dropdown-menu-{{ $index }}"
                                            class="z-10 hidden w-44 divide-y divide-gray-100 rounded bg-white shadow dark:divide-gray-600 dark:bg-gray-700">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                                aria-labelledby="dropdown-button-{{ $index }}">
                                                <li>
                                                    <a href="#"
                                                        onclick="openEditModal('{{ $item['id'] }}', {
                                                           nama_dosen: '{{ $item['nama_dosen'] }}',
                                                           nama_pt: '{{ $item['nama_pt'] }}',
                                                           prodi: '{{ $item['prodi'] }}',
                                                           gelar: '{{ $item['gelar'] }}',
                                                           th_lulus: '{{ $item['th_lulus'] }}'
                                                       })"
                                                        data-modal-target="edit-modal" data-modal-toggle="edit-modal"
                                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                        Edit
                                                    </a>
                                                </li>
                                            </ul>
                                            <div class="py-1">
                                                <form action="{{ route('riwayat-pendidikan.destroy', $item->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button
                                                        class="w-full justify-start px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
                                                        onclick="return confirm('Yakin hapus?')">
                                                        Delete
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <nav class="flex flex-col items-start justify-between space-y-3 p-4 md:flex-row md:items-center md:space-y-0"
                    aria-label="Table navigation">
                    <span class="text-sm font-normal text-gray-500 dark:text-gray-400">
                        Showing
                        <span class="font-semibold text-gray-900 dark:text-white">1-10</span>
                        of
                        <span class="font-semibold text-gray-900 dark:text-white">1000</span>
                    </span>
                    <ul class="inline-flex items-stretch -space-x-px">
                        <li>
                            <a href="#"
                                class="ml-0 flex h-full items-center justify-center rounded-l-lg border border-gray-300 bg-white px-3 py-1.5 text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Previous</span>
                                <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                                class="z-10 flex items-center justify-center border border-primary-300 bg-primary-50 px-3 py-2 text-sm leading-tight text-primary-600 hover:bg-primary-100 hover:text-primary-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">...</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex items-center justify-center border border-gray-300 bg-white px-3 py-2 text-sm leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">100</a>
                        </li>
                        <li>
                            <a href="#"
                                class="flex h-full items-center justify-center rounded-r-lg border border-gray-300 bg-white px-3 py-1.5 leading-tight text-gray-500 hover:bg-gray-100 hover:text-gray-700 dark:border-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                <span class="sr-only">Next</span>
                                <svg class="h-5 w-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                        clip-rule="evenodd" />
                                </svg>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
            {{-- modal tambah --}}
            <div id="crud-modal" tabindex="-1" aria-hidden="true"
                class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
                <div class="relative max-h-full w-full max-w-2xl p-4">
                    <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                        <div
                            class="flex items-center justify-between rounded-t border-b p-4 dark:border-gray-600 md:p-5">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                <span id="modal-title">Tambah Data Dokumen</span>
                            </h3>
                            <button type="button"
                                class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="crud-modal">
                                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <form id="crud-form" class="p-4 md:p-5" method="POST" action="/riwayat-pendidikan"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="mb-4 grid grid-cols-2 gap-4">
                                <div class="col-span-2">
                                    <label for="nama_dosen"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                    <input type="text" name="nama_dosen" id="nama_dosen_store"
                                        class="@error('nama_dosen') border-red-500 @enderror block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                        placeholder="Masukkan Nama Dosen" required>
                                    @error('nama_dosen')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-span-2">
                                    <label for="nama_pt"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama
                                        Perguruan Tinggi</label>
                                    <input type="text" name="nama_pt" id="nama_pt_store"
                                        class="@error('nama_pt') border-red-500 @enderror block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                        placeholder="Masukkan Perguruan Tinggi" required>
                                    @error('nama_pt')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-span-2">
                                    <label for="prodi"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Program
                                        Studi</label>
                                    <input type="text" name="prodi" id="prodi_store"
                                        class="@error('prodi') border-red-500 @enderror block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                        placeholder="Masukkan Nama Program Studi" required>
                                    @error('prodi')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-span-2">
                                    <label for="gelar"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Gelar</label>
                                    <input type="text" name="gelar" id="gelar_store"
                                        class="@error('gelar') border-red-500 @enderror block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                        placeholder="Masukkan Gelar" required>
                                    @error('gelar')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-span-2">
                                    <label for="th_lulus"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Tahun
                                        Kelulusan</label>
                                    <input type="number" name="th_lulus" id="th_lulus_store"
                                        class="@error('th_lulus') border-red-500 @enderror block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                        placeholder="Masukkan Tahun Kelulusan"required>
                                    @error('th_lulus')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-span-2">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="bukti_ijazah">Bukti Ijazah</label>
                                    <input
                                        class="@error('ijazah') border-red-500 @enderror block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                                        aria-describedby="file_input_help" id="bukti_ijazah_store"
                                        name="bukti_ijazah" type="file" accept=".pdf,.doc,.docx,.jpg,.jpeg,.svg">
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
                                        *MAX. 5Mb (Format: PDF, DOC, DOCX, JPG, JPEG)
                                    </p>
                                    @error('bukti_ijazah')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex justify-end space-x-4 p-4">
                                <button type="button"
                                    class="inline-flex items-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-500 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                                    data-modal-toggle="crud-modal">
                                    Batal
                                </button>
                                <button type="submit"
                                    class="inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- modal edit  --}}
            <div id="edit-modal" tabindex="-1" aria-hidden="true"
                class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
                <div class="relative max-h-full w-full max-w-2xl p-4">
                    <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                        <div
                            class="flex items-center justify-between rounded-t border-b p-4 dark:border-gray-600 md:p-5">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                <span id="modal-title">Edit Data Dokumen</span>
                            </h3>
                            <button type="button"
                                class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="edit-modal">
                                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <form id="edit-form" class="p-4 md:p-5" method="POST"
                            data-route="{{ route('riwayat-pendidikan.update', ':id') }}"
                            enctype="multipart/form-data">
                            @csrf

                            <div id="method-update"></div>
                            {{-- @method('put') --}}
                            <div class="mb-4 grid grid-cols-2 gap-4">
                                <div class="col-span-2">
                                    <label for="nama_dosen"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                    <input type="text" name="nama_dosen" id="nama_dosen"
                                        class="@error('nama_dosen') border-red-500 @enderror block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                        placeholder="Masukkan nama dosen" required>
                                    @error('nama_dosen')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-span-2">
                                    <label for="nama_pt"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Nama
                                        Pergurua Tinggi</label>
                                    <input type="text" name="nama_pt" id="nama_pt"
                                        class="@error('nama_pt') border-red-500 @enderror block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                        placeholder="Masukkan Perguruan Tinggi" required>
                                    @error('nama_pt')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-span-2">
                                    <label for="prodi"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Program
                                        Studi</label>
                                    <input type="tetxt" name="prodi" id="prodi"
                                        class="@error('prodi') border-red-500 @enderror block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                        required>
                                    @error('prodi')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-span-2">
                                    <label for="gelar"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Program
                                        Studi</label>
                                    <input type="tetxt" name="gelar" id="gelar"
                                        class="@error('gelar') border-red-500 @enderror block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                        required>
                                    @error('gelar')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-span-2">
                                    <label for="th_lulus"
                                        class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">Program
                                        Studi</label>
                                    <input type="tetxt" name="th_lulus" id="th_lulus"
                                        class="@error('th_lulus') border-red-500 @enderror block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-600 focus:ring-primary-600 dark:border-gray-500 dark:bg-gray-600 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                        required>
                                    @error('th_lulus')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div class="col-span-2">
                                    <label class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"
                                        for="bukti_ijazah">Bukti Ijazah</label>
                                    <input
                                        class="@error('ijazah') border-red-500 @enderror block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-gray-400 dark:placeholder-gray-400"
                                        aria-describedby="file_input_help" id="bukti_ijazah" name="bukti_ijazah"
                                        type="file" accept=".pdf,.doc,.docx,.jpg,.jpeg,.svg">
                                    <p class="mt-1 text-sm text-gray-500 dark:text-gray-300" id="file_input_help">
                                        *MAX. 5Mb (Format: PDF, DOC, DOCX, JPG, JPEG)
                                    </p>
                                    @error('bukti_ijazah')
                                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                            <div class="flex justify-end space-x-4 p-4">
                                <button type="button"
                                    class="inline-flex items-center rounded-lg border border-gray-300 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:border-gray-500 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600"
                                    data-modal-toggle="edit-modal">
                                    Batal
                                </button>
                                <button type="submit"
                                    class="inline-flex items-center rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    Simpan
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div id="ijazah-modal" tabindex="-1" aria-hidden="true"
                class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
                <div class="relative max-h-full w-full max-w-2xl p-4">
                    <!-- Modal content -->
                    <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between p-4 md:p-5">
                            <button type="button"
                                class="end-2.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-hide="ijazah-modal">
                                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5">
                            <img id="modal-image" src="" alt="ijazah Image" class="h-auto w-full">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        function openEditModal(id, data) {
            console.log(id, data);

            // Mengubah judul modal
            document.getElementById('modal-title').textContent = 'Edit Data Dokumen';

            // Mengubah action form
            const form = document.getElementById('edit-form');
            let route = form.getAttribute('data-route').replace(':id', id);
            form.action = route;


            // Menambahkan method PUT untuk update
            const methodField = document.getElementById('method-update');
            methodField.innerHTML = '@method('PUT')';

            // Mengisi data ke form
            document.getElementById('nama_dosen').value = data.nama_dosen;
            document.getElementById('nama_pt').value = data.nama_pt;
            document.getElementById('prodi').value = data.prodi;
            document.getElementById('gelar').value = data.gelar;
            document.getElementById('th_lulus').value = data.th_lulus;
        }
        document.addEventListener('DOMContentLoaded', function() {
            // Dapatkan semua link yang membuka modal
            const links = document.querySelectorAll('[data-modal-target="ijazah-modal"]');
            const modalImage = document.getElementById('modal-image');

            links.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    // Ambil value dari data-modal-value
                    const imageValue = this.getAttribute('data-modal-value');
                    // Update src gambar dalam modal
                    modalImage.src = `/storage/${imageValue}`;
                });
            });
        });
    </script>
</x-layout>
