<div class="modal fade" id="addListModal" tabindex="-1" aria-labelledby="addListModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        {{-- from action di gunakan untuk mengarahkan data ke validasi store --}}
        <!-- Modal untuk menambahkan List -->
<div class="modal fade" id="addListModal" tabindex="-1" aria-labelledby="addListModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('lists.store') }}" method="POST" class="modal-content">
            @method('POST') <!-- Menentukan metode HTTP POST untuk form -->
            @csrf <!-- Token CSRF untuk keamanan form dari serangan CSRF -->
            
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addListModalLabel">Tambah List</h1>
                <!-- Tombol untuk menutup modal -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <!-- Input untuk nama list yang akan ditambahkan -->
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama list">
                </div>
            </div>
            
            <div class="modal-footer">
                <!-- Tombol untuk membatalkan input dan menutup modal -->
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <!-- Tombol untuk mengirim form dan menambahkan list baru -->
                <button type="submit" class="btn btn-dark">Tambah</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal untuk menambahkan Task -->
<div class="modal fade" id="addTaskModal" tabindex="-1" aria-labelledby="addTaskModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{ route('tasks.store') }}" method="POST" class="modal-content">
            @method('POST') <!-- Menentukan metode HTTP POST untuk form -->
            @csrf <!-- Token CSRF untuk keamanan form -->
            
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="addTaskModalLabel">Tambah Task</h1>
                <!-- Tombol untuk menutup modal -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            
            <div class="modal-body">
                <!-- Input hidden untuk menyimpan list_id agar task bisa dikaitkan ke list yang benar -->
                <input type="text" id="taskListId" name="list_id" hidden>
                
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <!-- Input untuk nama task yang akan ditambahkan -->
                    <input type="text" class="form-control" id="name" name="name" placeholder="Masukkan nama task">
                </div>
            </div>
            
            <div class="modal-footer">
                <!-- Tombol untuk membatalkan dan menutup modal -->
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <!-- Tombol untuk mengirim form dan menambahkan task baru -->
                <button type="submit" class="btn btn-dark">Tambah</button>
            </div>
        </form>
    </div>
</div>

                <div class="mb-3">
                    {{-- mb-3 dibuat untuk margin bottom atau memberi jarak agar tidak berdekatan --}}
                    <label for="description" class="form-label">Deskripsi :</label>
                    {{-- form-label digunakan untuk menyamakan ukuran input --}}
                    {{-- label adalah element yang digunakan untuk memberikan informasi tambahkan --}}
                    <input type="text" class="form-control" id="description" name="description" {{-- input type="text" digunakan untuk menampilkan form yang akan diisi --}}
                        {{-- class form control untuk menyamakan ukuran --}} {{-- id description untuk tanda pengenal --}} placeholder="Apakah deskripsi kegiatan anda??🤔">
                    {{-- placeholder adalah atribut dalam input yang memberikan teks petunjuk dalam kolom input --}}
                </div>
                <div class="col-md-12 mb-3">
                    <label for="priority" class="form-label">Priority :</label>
                    <select class="form-control" name="priority" id="taskListId" name="list_id" required>
                        {{-- select adalah menu drop down yang memungkinkan pengguna memiiih satu atau beberapa opsi --}}
                        <option value="medium">Medium</option>
                        <option value="high">High</option>
                        <option value="low">Low</option>
                        {{-- option adalah element yang digunakan untuk mendefinisikan pilihan atau menu dari drop down select --}}
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-dark">Tambah</button>
            </div>
        </form>
    </div>
</div>
