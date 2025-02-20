<div class="nav-item dropdown bg-dark ms-auto">
    <!-- Judul untuk dropdown, menampilkan nama "AGENDAKU" -->
    <div class="text-center py-3">
        <h3 class="fw-bold text-white text-center">AGENDAKU</h3>
    </div>

    <!-- Tombol dropdown yang menampilkan foto profil pengguna -->
    <a href="#" class="nav-link dropdown-toggle d-flex justify-content-center" id="userDropdown" role="button"
        data-bs-toggle="dropdown" aria-expanded="false">
        <!-- Foto Profil -->
        <img class="rounded-circle border border-3 shadow-sm" src="assets/img/profile.jpeg" alt="User  Avatar"
            style="width: 50px; height: 50px;">
    </a>

    <!-- Menu dropdown yang muncul saat tombol diklik -->
    <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0 bg- animate_animated animate_fadeIn"
        aria-labelledby="userDropdown">
        <!-- Item untuk Profil & Identitas -->
        <li>
            <a class="dropdown-item d-flex align-items-center text-light" href="#">
                <i class="fas fa-user-circle me-2 text-white"></i> Profil Saya
            </a>
        </li>
        <!-- Bagian untuk menampilkan informasi pengguna -->
        <li class="px-5 py-3 text-center">
            <img class="rounded-circle shadow-sm mb-2" src="assets/img/profile.jpeg" alt="User  Avatar"
                style="width: 70px; height: 70px; object-fit: cover;">
            <p class="fw-bold text-light-emphasis mb-1 text-white">Cantika Inne</p>
            <small class="text-dark d-block">XII RPL</small>
            <small class="text-dark d-block">telp: 082340266184</small>
            <small class="text-dark d-block">2223588.cantika@smkn-2sbg.sch.id</small>
        </li>
        <!-- Pembatas antara item dropdown -->
        <li>
            <hr class="dropdown-divider border-sark">
        </li>
    </ul>
</div>


<!-- CSS -->
<style>
    /* Hover Efek untuk Foto Profil */
    .nav-link img:hover {
        transform: scale(1.1); /* Memperbesar gambar saat hover */
    }

    /* Animasi fade-in untuk dropdown */
    .dropdown-menu {
        animation-duration: 0.3s; /* Durasi animasi dropdown */
    }

    /* Warna dropdown dark mode */
    .dropdown-menu {
        background-color: rgb(247, 241, 241); /* Warna latar belakang dropdown */
    }

    /* Warna item dropdown */
    .dropdown-item {
        font-size: 14px; /* Ukuran font untuk item dropdown */
        padding: 8px 15px; /* Padding untuk item dropdown */
        color: rgb(247, 241, 241); /* Warna teks item dropdown */
    }

    /* Hover efek pada dropdown item */
    .dropdown-item:hover {
        background-color: rgb(247, 241, 241); /* Warna latar belakang saat hover */
        color: rgb(247, 241, 241); /* Warna teks saat hover */
    }
</style>