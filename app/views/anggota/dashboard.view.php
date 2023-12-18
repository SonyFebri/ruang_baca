<head>

    <?php Helper::importView("partials/headerAnggota.view.php") ?>
    <?php Helper::importView("partials/sidebarAnggota.view.php") ?>

</head>
<link rel="stylesheet" href="<?php echo App::get("root_uri") . "/public/css/styleCarddashboard.css" ?>">

<body>
    <h4>Dashboard</h4>
    <div class="container-wrapper">

        <!-- Kontainer pertama -->
        <div class="container">
            <!-- Isi kontainer 1 -->Buku Dipinjam
        </div>

        <!-- Kontainer kedua -->
        <div class="container">
            <!-- Isi kontainer 2 -->Buku Dikembalikan
        </div>

        <!-- Kontainer ketiga -->
        <div class="container">
            <!-- Isi kontainer 3 -->Banyaknya Meminjam
        </div>

    </div>
    <br>
    <h4>Last borrowed book</h4>
    <br><br><br>
    <?php
    /**
     * @var BookModel1[] $book
     */
    foreach ($book as $buku): ?>
    <div class="container2">
        <p>
            <?php echo $buku->getJudulBuku() ?>
        </p>
        <p class="deskripsi">
            <?php echo $buku->getDeskripsi() ?>
        </p>
        <div class="book-container">
            <img src="<?php echo App::get("root_uri") . "/public/cover/gusdur.jpg" ?>" class="card-img-top"
                alt="Book Cover">
        </div>
    </div>
    <?php endforeach; ?>
    <?php Helper::importView("partials/footer.view.php") ?>

</body>