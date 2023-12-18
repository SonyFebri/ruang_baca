<head>
    <title>Katalog Buku</title>
</head>

<body>
    <?php Helper::importView("partials/headerAnggota.view.php") ?>
    <div class="row">
        <div class="col-md-2">
            <?php Helper::importView("partials/sidebarAnggota.view.php") ?>
        </div>
        <div class="col-md-9">
            <div class="container mt-1">

                <form class="form-inline" action="<?php echo App::get("root_uri") . "/buku/searchBook" ?>" method="get">
                    <div class="input-group">
                        <input type="text" class="form-control" name="q" placeholder="Cari Buku..."
                            value="<?php echo isset($_GET['q']) ? $_GET['q'] : '' ?>">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                </form>

                <div class="container mt-3">
                    <div class="row">
                        <?php
                        /**
                         * @var BookModel[] $books
                         */
                        for ($i = 0; $i < count($books); $i++) {
                            $book = $books[$i];
                            ?>


                            <div class="col-10 col-sm-4 col-md-3 mb-2">
                                <div class="card">
                                    <img src="<?php echo App::get("root_uri") . $book->getCoverBuku() ?>"
                                        class="card-img-top" alt="Book Cover">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <?= $book->getJudulBuku() ?>
                                        </h5>
                                        <p class="card-text">
                                            <?= $book->getPenulis() ?>
                                        </p>
                                        <p class="card-text">
                                            <?= $book->getTahunTerbit() ?>
                                        </p>
                                        <p class="card-text">
                                            <?= $book->getStok() . "/" . $book->getStokTersedia() ?>
                                        </p>
                                        <button type="submit" class="btn btn-sm btn-info" value="<?= $book->getIdBuku() ?>">
                                            <a href="#">Deskripsi</a>
                                        </button>
                                        <form action="<?php echo App::get("root_uri") . "/anggota/cart/addToDetailCart" ?>"
                                            method="post">
                                            <input type="hidden" name="id_buku" value="<?= $book->getIdBuku() ?>">
                                            <button type="submit" class="btn btn-sm btn-info">Tambah</button>
                                        </form>

                                    </div>
                                </div>
                            </div>


                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <?php Helper::importView("partials/footer.view.php") ?>
</body>

</html>