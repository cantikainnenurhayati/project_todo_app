@extends('layouts.app')

@section('content')
    <style>
        /* Mengatur gambar latar belakang untuk elemen dengan ID 'content' */
        #content {
            background-image: url('{{ asset('/images/background.jpg') }}');
            /* Menggunakan gambar dari folder public/images/yg bernama background image */
            background-size: cover;
            /* Memastikan gambar menutupi seluruh area */
            background-position: center;
            /* Memposisikan gambar di tengah */
            color: white;
            /* Mengubah warna teks menjadi putih untuk kontras yang lebih baik */
            min-height: 100vh;
            /* Memastikan konten memenuhi tinggi layar */
        }

        /* Mengatur gaya untuk kartu agar memiliki latar belakang transparan */
        .card {
            background-color: rgba(255, 255, 255, 0.9);
            /* Memberikan latar belakang putih dengan transparansi 90% */
            transition: transform 0.2s;
            /* Menambahkan efek transisi saat hover */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            /* Menambahkan bayangan pada kartu */
        }

        .card:hover {
            transform: scale(1.05);
            /* Efek zoom saat hover */
        }

        .btn {
            transition: background-color 0.3s, transform 0.2s;
            /* Transisi untuk tombol */
        }

        .btn:hover {
            transform: scale(1.1);
            /* Efek zoom saat hover pada tombol */
        }

        .badge {
            font-size: 0.9em;
            /* Ukuran font badge */
        }
    </style>

    <div id="content" class="p-4">
        @if ($lists->count() == 0)
            <div class="text-center mb-4">
                <button type="button" class="btn btn-dark btn-sm">
                    <i class="bi bi-plus-square"></i> Tambah <!-- Tombol untuk menambah tugas -->
                </button>
            </div>
        @endif
        <div class="d-flex gap-4 flex-nowrap overflow-x-auto" style="height: 80vh;">
            @foreach ($lists as $list)
                <!-- Mengiterasi setiap daftar tugas -->
                <div class="card shadow-sm flex-shrink-0" style="width: 18rem; border-radius: 15px;">
                    <div class="card-header d-flex align-items-center justify-content-between bg-dark text-white"
                        style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        <h5 class="card-title mb-0">{{ $list->name }}</h5>
                        <!-- Menampilkan nama daftar  dan beetwen bg-dark untuk mebgubah warna pada tasklist -->
                        <form action="{{ route('lists.destroy', $list->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link text-white p-0">
                                <i class="bi bi-trash"></i> <!-- Tombol untuk menghapus daftar -->
                            </button>
                        </form>
                    </div>
                    <div class="card-body d-flex flex-column gap-3 overflow-x-hidden">
                        {{-- berfungsi untuk mengatur tata letak dan tampilan bagian dalam kartu (card) di Bootstrap --}}
                        @foreach ($tasks as $task)
                            <!-- Mengitegrasi setiap tugas dalam daftar -->
                            @if ($task->list_id == $list->id)
                                <!-- Memeriksa apakah tugas termasuk dalam daftar ini -->
                                <div class="card border-secondary">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                <a href="{{ route('tasks.show', $task->id) }}"
                                                    class="fw-bold text-dark{{ $task->is_completed ? 'text-decoration-line-through text-muted' : '' }}">
                                                    {{ $task->name }}
                                                    <!-- Menampilkan nama tugas dan  "fw-bold text-dark untuk mebgubah warna huruf" -->
                                                </a>
                                                <span class="badge text-bg-{{ $task->priorityClass }} badge-pill ms-2">
                                                    {{ $task->priority }} <!-- Menampilkan prioritas tugas -->
                                                </span>
                                            </div>
                                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link text-danger p-0">
                                                    <i class="bi bi-x-circle"></i> <!-- Tombol untuk menghapus tugas -->
                                                </button>
                                            </form>
                                        </div>
                                        <p class="card-text text-truncate">{{ $task->description }}</p>
                                        <!-- Menampilkan deskripsi tugas -->
                                        @if (!$task->is_completed)
                                            <!-- Memeriksa apakah tugas belum selesai -->
                                            <form action="{{ route('tasks.complete', $task->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-secondary btn-sm">
                                                    <i class="bi bi-check"></i> Selesai
                                                    <!-- Tombol untuk menandai tugas sebagai selesai -->
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#addTaskModal"
                            data-list="{{ $list->id }}">
                            <i class="bi bi-plus"></i> Tambah Tugas <!-- Tombol untuk menambah tugas baru -->
                        </button>
                    </div>
                    <div class="card-footer text-muted">
                        {{ $list->tasks->count() }} Tugas <!-- Menampilkan jumlah tugas dalam daftar -->
                    </div>
                </div>
            @endforeach
            {{-- Tombol dengan desain outline dark, tetapi ukurannya mungkin terlalu besar untuk responsivitas - --}}
            <button type="button" class="btn btn-outline-dark flex-shrink-0" style="width: 18rem; height: fit-content;"
                data-bs-toggle="modal" data-bs-target="#addListModal">
                <span class="d-flex align-items-center justify-content-center">
                    {{-- Ikon plus sudah sesuai, tetapi sebaiknya ditambahkan aria-hidden="true" untuk aksesibilitas --> --}}
                    <i class="bi bi-plus fs-5"></i>
                    {{-- !-- Teks "Tambah" terlihat jelas, tetapi bisa diberi jarak dengan ikon menggunakan gap-2 --> --}}
                    Tambah
                </span>
            </button>


        </div>
    </div>
@endsection
