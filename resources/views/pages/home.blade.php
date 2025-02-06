@extends('layouts.app')

@section('content')
    <style>
        /* Mengatur gambar latar belakang untuk elemen dengan ID 'content' */
        #content {
            background-image: url('{{ asset('images/background.jpg') }}'); /* Menggunakan gambar dari folder public/images/yg bernama background image */
            background-size: cover; /* Memastikan gambar menutupi seluruh area */
            background-position: center; /* Memposisikan gambar di tengah */
            color: white; /* Mengubah warna teks menjadi putih untuk kontras yang lebih baik */
        }
        /* Mengatur gaya untuk kartu agar memiliki latar belakang transparan */
        .card {
            background-color: rgba(255, 255, 255, 0.8); /* Memberikan latar belakang putih dengan transparansi 80% */
        }
    </style>

    <div id="content" class="p-4">
        @if ($lists->count() == 0) <!-- Memeriksa apakah tidak ada daftar tugas -->
            <div class="text-center mb-4">
                <p class="fw-bold">Belum ada tugas yang ditambahkan</p> <!-- Pesan jika tidak ada tugas -->
                <button type="button" class="btn btn-primary btn-sm">
                    <i class="bi bi-plus-square"></i> Tambah <!-- Tombol untuk menambah tugas -->
                </button>
            </div>
        @endif
        <div class="d-flex gap-4 flex-nowrap overflow-x-auto" style="height: 80vh;">
            @foreach ($lists as $list) <!-- Mengiterasi setiap daftar tugas -->
                <div class="card shadow-sm flex-shrink-0" style="width: 18rem; border-radius: 15px;">
                    <div class="card-header d-flex align-items-center justify-content-between bg-primary text-white" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                        <h5 class="card-title mb-0">{{ $list->name }}</h5> <!-- Menampilkan nama daftar -->
                        <form action="{{ route('lists.destroy', $list->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-link text-white p-0">
                                <i class="bi bi-trash"></i> <!-- Tombol untuk menghapus daftar -->
                            </button>
                        </form>
                    </div>
                    <div class="card-body d-flex flex-column gap-3">
                        @foreach ($tasks as $task) <!-- Mengiterasi setiap tugas dalam daftar -->
                            @if ($task->list_id == $list->id) <!-- Memeriksa apakah tugas termasuk dalam daftar ini -->
                                <div class="card border-light">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div>
                                                {{-- a href Ini adalah elemen tautan yang mengarahkan pengguna ke halaman detail tugas. --}}
                                                <a href="{{ route('tasks.show', $task->id) }}" class="fw-bold {{ $task->is_completed ? 'text-decoration-line-through text-muted' : '' }}">
                                                    {{ $task->name }} <!-- Menampilkan nama tugas -->
                                                </a>
                                                <span class="badge text-bg-{{ $task->priorityClass }} badge-pill ms-2">
                                                    {{ $task->priority }} <!-- Menampilkan prioritas tugas -->
                                                </span>
                                            </div>
                                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-link text-danger p-0">
                                                    <i class="bi bi-x-circle"></i> <!-- Tombol untuk menghapus tugas -->
                                                </button>
                                            </form>
                                        </div>
                                        <p class="card-text text-truncate">{{ $task->description }}</p> <!-- Menampilkan deskripsi tugas -->
                                        @if (!$task->is_completed) <!-- Memeriksa apakah tugas belum selesai -->
                                            <form action="{{ route('tasks.complete', $task->id) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-success btn-sm">
                                                    <i class="bi bi-check"></i> Selesai <!-- Tombol untuk menandai tugas sebagai selesai -->
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            @endif
                        @endforeach
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#addTaskModal" data-list="{{ $list->id }}">
                            <i class="bi bi-plus"></i> Tambah Tugas <!-- Tombol untuk menambah tugas baru -->
                        </button>
                    </div>
                    <div class="card-footer text-muted">
                        {{ $list->tasks->count() }} Tugas <!-- Menampilkan jumlah tugas dalam daftar -->
                    </div>
                </div>
            @endforeach
            <button type="button" class="btn btn-primary flex-shrink-0" style="width: 18rem;" data-bs-toggle="modal" data-bs-target="#addListModal">
                <i class="bi bi-plus"></i> Tambah Daftar <!-- Tombol untuk menambah daftar baru -->
            </button>
        </div>
    </div>
@endsection