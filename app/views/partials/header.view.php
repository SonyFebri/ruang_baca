<style>
    .user-profile {
        position: relative;
        display: inline-block;
    }

    .user-info {
        display: flex;
        align-items: center;
    }

    .user-name {
        margin-top: 1px;
        margin-right: 30px;
        /* Mengurangi jarak antara nama dan gambar */
    }

    .cart-logo {
        width: 20px;
        /* Sesuaikan dengan ukuran yang diinginkan */
        height: 20px;
        /* Sesuaikan dengan ukuran yang diinginkan */
        margin-right: 10px;
    }

    .user-profile img {
        width: 40px;
        height: 40px;
        border-radius: 40%;
        margin-right: 10px;
    }

    .logo-img {
        width: 70%;
        height: auto;
        margin-left: 20px;
    }
</style>

<nav class="navbar">
    <div class="logo-container">
        <img src="<?php echo App::get("root_uri") . "/public/logo/Logo Ruang Baca.png" ?>" alt="Logo" class="logo-img">
    </div>

    <div class="user-profile">
        <div class="user-info">
            <a href="<?php echo App::get("root_uri") . "/anggota/cart/detailCart" ?>" class="btn btn-primary">
                <img src="<?php echo App::get("root_uri") . "/public/logo/cart.png" ?>" alt="Keranjang Belanja"
                    class="cart-logo">
            </a>
            <span class="user-name">
                <?php echo Session::getInstance()->get('nama') ?>
            </span>
            <img src="<?php echo App::get("root_uri") . Session::getInstance()->get('foto_user') ?>"
                alt="Foto Pengguna">
            <span class="badge">3</span>
        </div>
    </div>
</nav>