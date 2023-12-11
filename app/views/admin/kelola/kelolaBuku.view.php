<link rel="stylesheet" href="<?php echo App::get("root_uri") . "/public/css/styleTable.css" ?>">

<body>
    <?php Helper::importView("partials/header.view.php") ?>
    <?php Helper::importView("partials/sidebarAdmin.view.php") ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Total Stok</th>
                <th scope="col">Stok Tersedia</th>
                <th scope="col">Denda</th>
                <th scope="col">Action</th>

            </tr>
            <?php
            /**
             * @var BookModel[] $books
             */
            for ($i = 0; $i < count($books); $i++):
                $book = $books[$i];
                ?>
                <tr>
                    <td scope="row">
                        <?= $i + 1; ?>
                    </td>
                    <td scope="row">
                        <?= $book->getJudulBuku() ?>
                    </td>
                    <td scope="row">
                        <?= $book->getPenulis() ?>
                    </td>
                    <td scope="row">
                        <?= $book->getTahunTerbit() ?>
                    </td>
                    <td scope="row">
                        <?= $book->getStok() ?>
                    </td>
                    <td scope="row">
                        <?= $book->getStokTersedia() ?>
                    </td>
                    <td scope="row">
                        <?= $book->getDenda() ?>
                    </td>
                    <td>

                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>

                </tr>
            <?php endfor; ?>
            </tbody>
    </table>

    </thead>
    </table>
    <?php Helper::importView("partials/footer.view.php") ?>
</body>