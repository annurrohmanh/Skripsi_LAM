{{-- @extends('components.layout')
@section('content')
@section('title', 'Profil DTPS') --}}

<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <!-- Start coding here -->
        <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
            <div class="flex flex-col items-center justify-between space-y-3 p-4 md:flex-row md:space-x-4 md:space-y-0">
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
                    <button onclick="openModal(null, {}, 'store')" data-modal-target="crud-modal"
                        data-modal-toggle="crud-modal" type="button"
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
                            <th scope="col" class="px-4 py-3">NIDN</th>
                            <th scope="col" class="px-4 py-3">Tanggal Lahir</th>
                            <th scope="col" class="px-4 py-3">Sertifikat</th>
                            <th scope="col" class="px-4 py-3">Waktu Upload</th>
                            <th scope="col" class="px-4 py-3">Waktu Update</th>
                            <th scope="col" class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $index => $item)
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3">{{ $index + 1 }}</td>
                                <td class="px-4 py-3">{{ $item['nama_dosen_dtps'] }}</td>
                                <td class="px-4 py-3">{{ $item['nidn'] }}</td>
                                <td class="px-4 py-3">{{ $item['tanggal_lahir'] }}</td>
                                <td class="px-4 py-3">
                                    <a data-modal-value="{{ $item['bukti_sertifikasi'] }}"
                                        class="cursor-pointer text-blue-600" data-modal-target="sertifikasi-modal"
                                        data-modal-toggle="sertifikasi-modal">
                                        Bukti Sertifikasi
                                    </a>
                                </td>
                                <td class="px-4 py-3">
                                    {{ \Carbon\Carbon::parse($item['created_at'])->format('Y-m-d H:i:s') }}</td>
                                <td class="px-4 py-3">
                                    {{ \Carbon\Carbon::parse($item['updated_at'])->format('Y-m-d H:i:s') }}</td>
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
                                                    onclick="openModal('{{ $item['id'] }}', {
                                                    nama_dosen_dtps: '{{ $item['nama_dosen_dtps'] }}',
                                                    nidn: '{{ $item['nidn'] }}',
                                                    ttl: '{{ $item['tanggal_lahir'] }}', fileUrl: '{{ $item['bukti_sertifikasi'] }}'
                                                }, 'update')"
                                                    data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                                    class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                    Edit
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="py-1">
                                            <form action="{{ route('profil-dtps.destroy', $item->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button
                                                    class="w-full text-start px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-200 dark:hover:bg-gray-600 dark:hover:text-white"
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
        <div id="sertifikasi-modal" tabindex="-1" aria-hidden="true"
            class="fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden md:inset-0">
            <div class="relative max-h-full w-full max-w-2xl p-4">
                <!-- Modal content -->
                <div class="relative rounded-lg bg-white shadow dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-4 md:p-5">
                        <button type="button"
                            class="end-2.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="sertifikasi-modal">
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
                        <img id="modal-image" src="" alt="Sertifikasi Image" class="h-auto w-full">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CRUD Modal -->
    <div id="crud-modal" tabindex="-1" aria-hidden="true"
        class="fixed left-0 right-0 top-0 z-50 hidden h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden bg-gray-900/50 p-4">
        <div class="relative w-full max-w-4xl">
            <div class="relative rounded-xl bg-white shadow-xl dark:bg-gray-800">
                <!-- Modal Header -->
                <div class="flex items-center justify-between border-b p-6 dark:border-gray-700">
                    <h3 class="text-xl font-bold text-gray-900 dark:text-white">
                        <span id="modal-title">Tambah Data Dokumen</span>
                    </h3>
                    <button type="button" class="rounded-lg p-1.5 hover:bg-gray-100 dark:hover:bg-gray-700"
                        data-modal-toggle="crud-modal">
                        <svg class="h-5 w-5 text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>

                <!-- Modal Body -->
                <form id="crud-form" class="p-6" method="POST" data-route="" action=""
                    enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" value="POST">

                    <!-- Two Main Columns Container -->
                    <div class="grid grid-cols-2 gap-8 h-full">
                        <!-- Left Column - Text Inputs -->
                        <div class="space-y-4">
                            <!-- Nama Field -->
                            <div>
                                <label for="nama_dosen_dtps"
                                    class="block text-sm font-medium text-gray-900 dark:text-white">
                                    Nama
                                </label>
                                <input type="text" name="nama_dosen_dtps" id="nama_dosen_dtps"
                                    class="mt-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 @error('nama') border-red-500 @enderror"
                                    placeholder="Masukkan nama dosen" required>
                                @error('nama')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- NIDN Field -->
                            <div>
                                <label for="nidn" class="block text-sm font-medium text-gray-900 dark:text-white">
                                    NIDN
                                </label>
                                <input type="text" name="nidn" id="nidn"
                                    class="mt-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 @error('nidn') border-red-500 @enderror"
                                    placeholder="Masukkan NIDN" required>
                                @error('nidn')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- Tanggal Lahir Field -->
                            <div>
                                <label for="ttl" class="block text-sm font-medium text-gray-900 dark:text-white">
                                    Tanggal Lahir
                                </label>
                                <input type="date" name="ttl" id="ttl"
                                    class="mt-2 block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:focus:border-blue-500 @error('ttl') border-red-500 @enderror"
                                    required>
                                @error('ttl')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>

                            <!-- File Upload Field -->
                            <div>
                                <label for="bukti_sertifikasi"
                                    class="block text-sm font-medium text-gray-900 dark:text-white">
                                    Bukti Sertifikasi
                                </label>
                                <input type="file" name="bukti_sertifikasi" id="bukti_sertifikasi"
                                    accept=".pdf,.doc,.docx,.jpg,.jpeg,.png"
                                    class="mt-2 block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-50 text-sm text-gray-900 focus:outline-none dark:border-gray-600 dark:bg-gray-700 dark:text-white @error('sertifikasi') border-red-500 @enderror">
                                <p class="mt-1 text-sm text-gray-500 dark:text-gray-400">
                                    *MAX. 5Mb (Format: PDF, DOC, DOCX, JPG, JPEG)
                                </p>
                                @error('sertifikasi')
                                    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Right Column - File Upload and Preview -->
                        <div class="space-y-4 h-full flex flex-col">
                            <!-- Label Preview -->
                            <div id="preview-label" class="text-center text-gray-500 dark:text-gray-400 mt-4">
                                Preview will appear here
                            </div>

                            <!-- Image Preview -->
                            <div class="mt-4 flex-1 hidden" id="image-preview">
                                <img id="modal-image" src="" alt="Sertifikasi Image"
                                    class="max-h-72 w-full rounded-lg object-scale-down">
                            </div>

                            <!-- PDF Preview -->
                            <div class="file-preview-container mt-4 flex-1 hidden" id="pdf-preview">
                                <iframe id="file-preview" src="" class="w-full h-full border-none"></iframe>
                            </div>
                        </div>
                    </div>


                    <!-- Modal Footer -->
                    <div class="mt-8 flex justify-end space-x-4">
                        <button type="button"
                            class="rounded-lg border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700"
                            data-modal-toggle="crud-modal">
                            Batal
                        </button>
                        <button type="submit"
                            class="rounded-lg bg-blue-600 px-4 py-2 text-sm font-medium text-white hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600">
                            Simpan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script>
        // Function to open form CRUD modal
        function openModal(id, data, method) {
            const form = document.getElementById('crud-form');
            const modalImageDiv = document.getElementById('image-preview');
            const modalImage = document.getElementById('modal-image');
            const fileInput = document.getElementById('bukti_sertifikasi');
            const filePreviewContainer = document.getElementById('pdf-preview');
            const filePreview = document.getElementById('file-preview');
            const previewLabel = document.getElementById('preview-label');
            const links = document.querySelectorAll('[data-modal-target="sertifikasi-modal"]');

            let route;
            let form_method;

            // Reset form dan semua preview elements
            form.reset();
            modalImage.src = '';
            filePreview.src = '';
            modalImageDiv.classList.add('hidden');
            filePreviewContainer.classList.add('hidden');
            previewLabel.classList.remove('hidden');

            // Tentukan route dan method berdasarkan method (store atau update)
            if (method === 'store') {
                route = "{{ route('profil-dtps.store') }}";
                form_method = 'POST';
            } else {
                route = "{{ route('profil-dtps.update', ':id') }}".replace(':id', id);
                form_method = 'PUT';
            }

            // Set route untuk form
            form.setAttribute("data-route", route);
            form.setAttribute("action", route);

            // Set method input field
            form.querySelector('input[name="_method"]').value = form_method;

            // Mengubah judul modal jika method update
            if (method === 'update') {
                document.getElementById('modal-title').textContent = 'Edit Data Dokumen';

                // Mengisi data form
                document.getElementById('nama_dosen_dtps').value = data.nama_dosen_dtps;
                document.getElementById('nidn').value = data.nidn;
                document.getElementById('ttl').value = data.ttl;

                // Set filename in file input
                const dataTransfer = new DataTransfer();
                const fileName = data.fileUrl.split('/').pop();
                const file = new File([''], fileName, {
                    type: 'application/octet-stream',
                });
                dataTransfer.items.add(file);
                fileInput.files = dataTransfer.files;

                const fileType = data.fileUrl.split('.').pop().toLowerCase();
                const fileUrl = `/storage/${data.fileUrl}`;
                previewLabel.classList.add('hidden');

                if (['jpg', 'jpeg', 'png', 'svg'].includes(fileType)) {
                    modalImage.src = fileUrl;
                    modalImageDiv.classList.remove('hidden');
                    filePreviewContainer.classList.add('hidden');
                } else if (fileType === 'pdf') {
                    filePreview.src = fileUrl;
                    filePreviewContainer.classList.remove('hidden');
                    modalImageDiv.classList.add('hidden');
                }
            }

            // Event listener untuk preview gambar atau PDF
            fileInput.addEventListener('change', function(e) {
                const file = e.target.files[0];

                if (file) {
                    // Reset semua preview elements
                    modalImage.src = '';
                    filePreview.src = '';
                    modalImageDiv.classList.add('hidden');
                    filePreviewContainer.classList.add('hidden');
                    previewLabel.classList.add('hidden');

                    const fileType = file.type;

                    if (fileType.startsWith('image/')) {
                        const reader = new FileReader();
                        reader.onload = function(event) {
                            modalImage.src = event.target.result;
                            modalImageDiv.classList.remove('hidden');
                        };
                        reader.readAsDataURL(file);
                    } else if (fileType === 'application/pdf') {
                        const objectURL = URL.createObjectURL(file);
                        filePreview.src = objectURL;
                        filePreviewContainer.classList.remove('hidden');
                    } else if (fileType ===
                        'application/vnd.openxmlformats-officedocument.wordprocessingml.document' ||
                        fileType === 'application/msword') {
                        const reader = new FileReader();

                        reader.onload = function(event) {
                            const arrayBuffer = event.target.result;

                            // Pastikan kontainer kosong sebelum me-render dokumen baru
                            filePreviewContainer.innerHTML = "";

                            // Render DOCX ke dalam filePreviewContainer
                            docx.renderAsync(arrayBuffer, filePreviewContainer, null, {
                                    inWrapper: false, // Bungkus konten dengan div
                                    ignoreWidth: true, // Abaikan lebar dokumen asli
                                    ignoreHeight: true, // Abaikan tinggi dokumen asli
                                    ignoreFonts: false, // Jangan pakai font asli dokumen
                                    breakPages: false, // Jika false, dokumen tidak akan dibagi per halaman
                                    useBase64URL: false, // Tidak perlu base64 untuk gambar
                                })
                                .then(() => {
                                    console.log("DOCX Rendered");

                                    // Terapkan style pada elemen 'docx' setelah rendering selesai
                                    const docContainer = filePreviewContainer.getElementsByClassName(
                                        "docx")[0];
                                    if (docContainer) {
                                        docContainer.style.padding = "15pt"; // Beri padding
                                        docContainer.style.height = "50vh"; // Set tinggi container
                                        docContainer.style.overflowY = "scroll"; // Aktifkan scroll vertical
                                        docContainer.style.border = "1px solid #ccc"; // Beri border
                                    }

                                    // Terapkan style pada semua elemen <span> di dalam .docx
                                    const spans = docContainer.querySelectorAll("span");
                                    spans.forEach((span) => {
                                        span.style.fontSize = "9px"; // Ubah ukuran font
                                    });
                                })
                                .catch((err) => {
                                    console.error("DOCX Error:", err);
                                    // Tampilkan pesan error ke pengguna
                                    alert("Gagal merender dokumen. Silakan coba file lain.");
                                });
                        };



                        reader.readAsArrayBuffer(file);

                        filePreviewContainer.classList.remove('hidden');
                        modalImageDiv.classList.add('hidden');
                    } else {
                        alert("Format file tidak didukung. Harap pilih file gambar atau PDF.");
                        previewLabel.classList.remove('hidden');
                    }
                }
            });
        }


        document.addEventListener('DOMContentLoaded', function() {
            // Dapatkan semua link yang membuka modal
            const links = document.querySelectorAll('[data-modal-target="sertifikasi-modal"]');
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
