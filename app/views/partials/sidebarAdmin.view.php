<div id="wrapper">

    <!-- Sidebar -->
    <div id="sidebar">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="<?= App::get("root_uri") . "/admin/dashboard" ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= App::get("root_uri") . "" ?>">Daftar Request</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= App::get("root_uri") . "/admin/kelola/daftarPeminjaman" ?>">Daftar
                        Peminjaman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= App::get("root_uri") . "/admin/kelola/anggota" ?>">Kelola
                        Anggota</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= App::get("root_uri") . "/admin/kelola/buku" ?>">Kelola Buku</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= App::get("root_uri") . "/auth/logout" ?>">Logout</a>
                </li>
            </ul>
        </nav>
    </div>
</div>