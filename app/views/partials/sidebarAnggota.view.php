<nav>
    <div id="sidebar">

        <ul class="nav flex-column">
            <li class="nav-item">
                <a href="<?= App::get("root_uri") . "/anggota/dashboard" ?>">
                    Home
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= App::get("root_uri") . "/anggota/katalogBuku" ?>">
                    Katalog Buku
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= App::get("root_uri") . "" ?>">
                    Riwayat Peminjaman
                </a>
            </li>
            <li class="nav-item">
                <a href="<?= App::get("root_uri") . "/auth/logout" ?>">
                    Logout
                </a>
            </li>
        </ul>
    </div>
</nav>