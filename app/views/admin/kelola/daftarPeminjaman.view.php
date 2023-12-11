<link rel="stylesheet" href="<?php echo App::get("root_uri") . "/public/css/styleTable.css" ?>">

<body>
    <?php Helper::importView("partials/header.view.php") ?>
    <?php Helper::importView("partials/sidebarAdmin.view.php") ?>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Tanggal Pinjam</th>
                <th scope="col">Tenggat Waktu</th>
                <th scope="col">Status</th>
                <th scope="col">Tanggal Pengembalian</th>
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

                    </td>
                    <td>
                        <?= $loan->getIdPeminjaman() ?>
                    </td>

                    <td>
                        <?= $loan->getTotalItem() ?>
                    </td>
                    <td>
                        <?= $loan->getTanggalPinjam() ?>
                    </td>
                    <td>
                        <?= $loan->getTenggatWaktu() ?>
                    </td>
                    <td>
                        <?= $loan->getStatus() ?>
                    </td>
                    <td>
                        <?= $loan->getTanggalPengembalian() ?>
                    </td>
                    <td>
                        <form action="#" method="post">
                            <input type="hidden" name="id_peminjaman" value="<?= $loan->getIdPeminjaman() ?>">
                            <button type="submit" class="btn btn-sm btn-info">
                                Detail
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    </thead>
    </table>
    <?php Helper::importView("partials/footer.view.php") ?>
</body>