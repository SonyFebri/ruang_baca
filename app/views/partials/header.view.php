<style>
.user-profile {
    position: relative;
    display: inline-block;
    /* Menjadikan kontainer sejajar dengan elemen sekitarnya */
}

.user-info {
    display: flex;
    align-items: center;
}

.user-name {
    margin-top: 10px;
    margin-right: 50px;
    /* Jarak antara nama & gambar */
}

.user-profile img {
    width: 40px;
    /* Sesuaikan dengan ukuran yang diinginkan */
    height: 40px;
    /* Sesuaikan dengan ukuran yang diinginkan */
    border-radius: 40%;
    position: absolute;
    top: 5px;
    /* Sesuaikan dengan jarak dari atas yang diinginkan */
    right: 5px;
    /* Sesuaikan dengan jarak dari kanan yang diinginkan */
    margin-right: 10px;
    /* Tambahkan margin-right sesuai kebutuhan */
}
</style>
<nav class="navbar">
    <div class="logo">
        <img src="logo.png" alt="Logo">
        RUANG BACA
    </div>
    <div class="user-profile">
        <div class="user-info">
            <span class="user-name">
                <?php echo Session::getInstance()->get('nama') ?>
            </span>
            <img src="<?php echo App::get("root_uri") . Session::getInstance()->get('foto_user') ?>"
                alt="Foto Pengguna">
            <span class="badge">3</span>
        </div>
    </div>

</nav>