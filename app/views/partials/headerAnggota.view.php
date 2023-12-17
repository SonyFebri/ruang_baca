<nav class="navView">

    <a href="<?php echo App::get("root_uri") . "/anggota/cart/detailCart" ?>" class="nav-link">
        <img src="<?php echo App::get("root_uri") . "/public/logo/cart.png" ?>" alt="Keranjang Belanja"
            class="icon cart-logo">
    </a>
    <span class="user-name">
        <?php echo Session::getInstance()->get('nama') ?>
    </span>
    <a href="<?php echo App::get("root_uri") . "/anggota/profile" ?>" class="nav-link">
        <img src="<?php echo App::get("root_uri") . Session::getInstance()->get('foto_user') ?>" alt="Foto Pengguna"
            class="icon user-avatar">
    </a>

</nav>