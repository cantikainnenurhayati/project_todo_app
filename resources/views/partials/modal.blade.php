{{-- <!-- Modal untuk menambahkan List -- --}}
<div class="modal fade" id="addListModal" tabindex="-1" aria-labelledby="addListModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        {{-- <!-- Form untuk mengirim data List ke route lists.store --> --}}
        <form action="{{ route('lists.store') }}" method="POST" class="modal-content">
            @method('POST') 
             <!-- Menentukan metode HTTP sebagai POST -->
            @csrf
            {{-- <!-- Token CSRF untuk keamanan Laravel --> --}}
            <div class="modal-header">
                {{--  {{-- Judul modal dengan ukuran font kecil (fs-5)  --}} 
                <h1 class="modal-title fs-5" id="addListModalLabel">Tambah List</h1>
                {{--  Tombol untuk menutup modal  --}}
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- bagian utama modal yang berisi konten form. --}}
            <div class="modal-body">
                {{-- Grup input untuk memasukkan nama list --}}
                <div class="mb-3">
                    <!-- Label untuk input nama list -->
                    <label for="name" class="form-label">Nama</label>
                    {{-- Input field untuk memasukkan nama list  --}}
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Masukkan nama list">
                </div>
            </div>
            <div class="modal-footer">
                {{-- Tombol untuk membatalkan dan menutup modal tanpa mengirim form  --}}
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                {{--  <!-- Tombol untuk mengirim form dan menambahkan data --> --}}
                <button type="submit" class="btn btn-dark">Tambah</button>
            </div>
        </form>
    </div>
</div>
{{-- <!-- Modal Bootstrap untuk menambahkan task -- --}}
<div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
    
    <div class="modal-dialog">
        <form action="{{ route('tasks.store') }}" method="POST" class="modal-content">
            @method('POST')
            @csrf
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addTaskModalLabel">Tambah Task</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="text" id="taskListId" name="list_id" hidden>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Masukkan nama list">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Deskripsi</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Masukkan deskripsi"></textarea>
                </div>
                <div class="mb-3">
                    <label for="priority" class="form-label">Priority</label>
                    <select class="form-control" name="priority" id="priority">
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
    </div>
</div>
