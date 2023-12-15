<body>
    <?php Helper::importView("partials/header.view.php") ?>


    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Total Buku</th>

                <th scope="col">Status</th>

                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            /**
             * @var PeminjamanModel[] $loans 
             */
            foreach ($loans as $index => $loan): ?>
                <tr>
                    <td scope="row">
                        <?= $index + 1; ?>
                    </td>

                    <td>
                        <?= $loan->getIdUser() ?>
                    </td>

                    <td>
                        <?= $loan->getTotalItem() ?>
                    </td>

                    <td>
                        <?= $loan->getStatus() ?>
                    </td>
                    <td>
                    <td>
                        <form action="#" method="post" style="display: inline-block;">
                            <input type="hidden" name="id_peminjaman" value="<?= $loan->getIdPeminjaman() ?>">
                            <button type="submit" class="btn btn-sm btn-info">
                                Detail
                            </button>
                        </form>

                        <form action="<?= App::get("root_uri") . "/admin/kelola/konfirmasiRequest" ?>" method="post"
                            style="display: inline-block;">
                            <input type="hidden" name="id_peminjaman" value="<?= $loan->getIdPeminjaman() ?>">
                            <button type="submit" class="btn btn-sm btn-info">
                                Konfirmasi
                            </button>
                        </form>
                    </td>

                    </td>

                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    </thead>
    </table>
    <?php Helper::importView("partials/footer.view.php") ?>
</body>