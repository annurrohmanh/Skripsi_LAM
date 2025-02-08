<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
        <!-- Start coding here -->
        <div class="relative overflow-hidden bg-white shadow-md dark:bg-gray-800 sm:rounded-lg">
            <div class="flex flex-col items-center justify-between space-y-3 p-4 md:flex-row md:space-x-4 md:space-y-0">
                <div class="w-full md:w-1/2">
                    <form class="flex items-center" id="search-form">
                        <label for="search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3">
                                <svg aria-hidden="true" class="h-5 w-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="search" id="search" name="search"
                                class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2 pl-10 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                placeholder="Search" autocomplete="off">
                        </div>
                    </form>
                </div>
                <div
                    class="flex w-full flex-shrink-0 flex-col items-stretch justify-end space-y-2 md:w-auto md:flex-row md:items-center md:space-x-3 md:space-y-0">
                    <button onclick="openModal(null, {}, 'store', '{{ $slug }}')" data-modal-target="crud-modal"
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

            <!-- Table Data-->
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
                                <td class="px-4 py-3">{{ $item['nama_dosen_' . $slug] }}</td>
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
                                                <a onclick="openModal('{{ $item['id'] }}', {
                                                    nama_dosen_{{ $slug }}: '{{ $item['nama_dosen_' . $slug] }}',
                                                    nidn: '{{ $item['nidn'] }}',
                                                    ttl: '{{ $item['tanggal_lahir'] }}',
                                                    fileUrl: '{{ $item['bukti_sertifikasi'] }}'
                                                }, 'update', '{{ $slug }}')"
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
            <nav class="p-4" id="pagination">
                {{ $data->links() }}
            </nav>
        </div>

    </div>

    <!-- Sertifikasi Modal -->
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
                        <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <div id="modal-preview-container" class="w-full h-[500px]"></div>
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
                                <label for="nama_dosen_{{ $slug }}"
                                    class="block text-sm font-medium text-gray-900 dark:text-white">
                                    Nama
                                </label>
                                <input type="text" name="nama_dosen_{{ $slug }}"
                                    id="nama_dosen_{{ $slug }}"
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

                            <!-- Preview Doc container -->
                            <div class="file-preview-container mt-4 flex-1 hidden" id="file-preview-container">
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
        // File type constants
        const SUPPORTED_FILE_TYPES = {
            IMAGE: ['jpg', 'jpeg', 'png'],
            PDF: ['pdf'],
            DOCUMENT: ['doc', 'docx']
        };

        const ROUTES = {
            'dtps': {
                store: "{{ route('profil-dtps.store') }}",
                update: (id) => "{{ route('profil-dtps.update', ':id') }}".replace(':id', id)
            },
            'dtpr': {
                store: "{{ route('profil-dtpr.store') }}",
                update: (id) => "{{ route('profil-dtpr.update', ':id') }}".replace(':id', id)
            }
        };

        // File preview handler class
        class FilePreviewHandler {
            constructor(options = {}) {
                this.previewContainer = options.previewContainer;
                this.previewLabel = options.previewLabel;
                this.defaultHeight = options.height || '50vh';
            }

            // Clear preview container
            clearPreview() {
                if (this.previewContainer) {
                    this.previewContainer.innerHTML = '';
                    this.previewContainer.classList.add('hidden');
                }
                if (this.previewLabel) {
                    this.previewLabel.classList.remove('hidden');
                }
            }

            // Show preview container
            showPreview() {
                this.previewContainer.classList.remove('hidden');
                if (this.previewLabel) {
                    this.previewLabel.classList.add('hidden');
                }
            }

            // Create image preview
            createImagePreview(src) {
                const img = document.createElement('img');
                img.src = src;
                img.className = `max-h-[${this.defaultHeight}] w-full object-scale-down`;
                return img;
            }

            // Create PDF preview
            createPDFPreview(src) {
                const iframe = document.createElement('iframe');
                iframe.src = src;
                iframe.className = 'w-full h-[500px] border-none';
                return iframe;
            }

            // Create download button
            createDownloadButton(fileUrl) {
                const button = document.createElement('a');
                button.href = fileUrl;
                button.className = 'p-3 rounded-md bg-blue-600 text-white';
                button.textContent = 'Download File';
                button.target = '_blank';
                return button;
            }

            // Handle DOCX preview
            async handleDocxPreview(arrayBuffer) {
                try {
                    await docx.renderAsync(arrayBuffer, this.previewContainer, null, {
                        inWrapper: false,
                        ignoreWidth: true,
                        ignoreHeight: true,
                        ignoreFonts: false,
                        breakPages: false,
                        useBase64URL: false
                    });

                    const docContainer = this.previewContainer.querySelector('.docx');
                    if (docContainer) {
                        Object.assign(docContainer.style, {
                            padding: '15pt',
                            height: '65vh',
                            overflowY: 'scroll',
                            border: '1px solid #ccc'
                        });

                        docContainer.querySelectorAll('span').forEach(span => {
                            span.style.fontSize = '9px';
                        });
                    }
                } catch (error) {
                    throw new Error('Failed to render DOCX preview');
                }
            }

            // Main preview method
            async preview(file, fileUrl) {
                this.clearPreview();

                const fileType = (file?.name || fileUrl).split('.').pop().toLowerCase();
                const source = fileUrl || URL.createObjectURL(file);

                try {
                    this.showPreview();

                    if (SUPPORTED_FILE_TYPES.IMAGE.includes(fileType)) {
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = (e) => {
                                this.previewContainer.appendChild(this.createImagePreview(e.target.result));
                            };
                            reader.readAsDataURL(file);
                        } else {
                            this.previewContainer.appendChild(this.createImagePreview(source));
                        }
                    } else if (SUPPORTED_FILE_TYPES.PDF.includes(fileType)) {
                        this.previewContainer.appendChild(this.createPDFPreview(source));
                    } else if (SUPPORTED_FILE_TYPES.DOCUMENT.includes(fileType)) {
                        if (file) {
                            const reader = new FileReader();
                            reader.onload = async (e) => {
                                try {
                                    await this.handleDocxPreview(e.target.result);
                                } catch (error) {
                                    this.previewContainer.appendChild(this.createDownloadButton(source));
                                }
                            };
                            reader.readAsArrayBuffer(file);
                        } else {
                            try {
                                const response = await fetch(source);
                                if (!response.ok) throw new Error('Network response was not ok');
                                const arrayBuffer = await response.arrayBuffer();
                                await this.handleDocxPreview(arrayBuffer);
                            } catch (error) {
                                this.previewContainer.appendChild(this.createDownloadButton(source));
                            }
                        }
                    } else {
                        throw new Error('Unsupported file format');
                    }
                } catch (error) {
                    console.error('Preview error:', error);
                    this.previewContainer.innerHTML =
                        '<p class="text-red-500 text-center">Format file tidak didukung atau gagal memuat preview.</p>';
                }
            }
        }

        // Initialize preview handlers
        document.addEventListener('DOMContentLoaded', () => {
            const modal = document.getElementById("sertifikasi-modal");
            if (modal) {
                new Modal(modal);
            }

            // Initialize modal preview
            const modalPreview = new FilePreviewHandler({
                previewContainer: document.querySelector('#modal-preview-container')
            });

            // Initialize form preview
            const formPreview = new FilePreviewHandler({
                previewContainer: document.getElementById('file-preview-container'),
                previewLabel: document.getElementById('preview-label')
            });

            // Handle modal preview links
            document.querySelectorAll('[data-modal-target="sertifikasi-modal"]').forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const fileUrl = link.getAttribute('data-modal-value');
                    modalPreview.preview(null, `/storage/${fileUrl}`);

                    // Fix: Get modal by ID instead of closest class
                    const modal = document.getElementById('sertifikasi-modal');
                    if (modal) {
                        modal.classList.remove('hidden');
                    }
                });
            });

            // Handle file input change
            document.getElementById('bukti_sertifikasi')?.addEventListener('change', (e) => {
                const file = e.target.files[0];
                if (file) {
                    formPreview.preview(file);
                }
            });

            // Expose the openModal function globally
            window.openModal = function(id, data, method, slug) {
                const form = document.getElementById('crud-form');
                const fileInput = document.getElementById('bukti_sertifikasi');
                let route, form_method;

                // Reset form and preview
                form.reset();
                formPreview.clearPreview();

                // Set route and method based on slug and operation type
                try {
                    if (!ROUTES[slug]) {
                        throw new Error(`Invalid slug: ${slug}`);
                    }

                    route = method === 'store' ?
                        ROUTES[slug].store :
                        ROUTES[slug].update(id);
                    form_method = method === 'store' ? 'POST' : 'PUT';

                    // Set modal title
                    document.getElementById('modal-title').textContent =
                        method === 'store' ? 'Tambah Data Dokumen' : 'Edit Data Dokumen';

                    if (method === 'update') {
                        // Fill form with existing data
                        document.getElementById('nama_dosen_' + slug).value = data['nama_dosen_' + slug];
                        document.getElementById('nidn').value = data.nidn;
                        document.getElementById('ttl').value = data.ttl;

                        // Handle file input
                        if (data.fileUrl) {
                            const dataTransfer = new DataTransfer();
                            const fileName = data.fileUrl.split('/').pop();
                            const file = new File([''], fileName, {
                                type: 'application/octet-stream'
                            });
                            dataTransfer.items.add(file);
                            fileInput.files = dataTransfer.files;

                            // Show file preview
                            formPreview.preview(null, `/storage/${data.fileUrl}`);
                        }
                    }

                    // Set form attributes
                    form.setAttribute('data-route', route);
                    form.setAttribute('action', route);
                    form.querySelector('input[name="_method"]').value = form_method;

                } catch (error) {
                    console.error('Error in openModal:', error);
                    alert('Terjadi kesalahan saat membuka modal. Silakan coba lagi.');
                }
            };
        });
    </script>
</x-layout>
