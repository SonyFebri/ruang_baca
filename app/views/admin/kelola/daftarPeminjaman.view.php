<body>
    <?php Helper::importView("partials/headerAdmin.view.php") ?>


    <div class="tabel">
        <table class="table table-striped" style="margin-inline: 50px;">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Peminjam</th>
                    <th scope="col">Total Item</th>
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
                 * @var PeminjamanModel[] $loan 
                 */
                $index = 1;
                foreach ($loan as $loans): ?>
                <tr>
                    <td scope="row">
                        <?= $index++; ?>
                    </td>
                    <td>
                        <?= $loans->getNamaPeminjam() ?>
                    </td>
                    <td>
                        <?= $loans->getTotalItem() ?>
                    </td>
                    <td>
                        <?= $loans->getTanggalPinjam() ?>
                    </td>
                    <td>
                        <?= $loans->getTenggatWaktu() ?>
                    </td>
                    <td>
                        <?= $loans->getStatus() ?>
                    </td>
                    <td>
                        <?= $loans->getTanggalPengembalian() ?>
                    </td>
                    <td>
                        <form action="<?= App::get("root_uri") . "/admin/kelola/detailPeminjaman" ?>" method="post"
                            style="display: inline-block;">
                            <input type="hidden" name="id_peminjaman" value="<?= $loans->getIdPeminjaman() ?>">
                            <button type="submit" class="btn btn-sm btn-info">
                                Detail
                            </button>
                        </form>
                        <?php
                            $buttonKembali = $loans->getStatus();
                            if ($buttonKembali == "Dipinjam") {
                                ?>
                        <form action="<?= App::get("root_uri") . "/admin/kelola/konfirmasiPengembalian" ?>"
                            method="post" style="display: inline-block;">
                            <input type="hidden" name="id_peminjaman" value="<?= $loans->getIdPeminjaman() ?>">
                            <button type="submit" class="btn btn-sm btn-info">
                                Return
                            </button>
                        </form>
                        <?php
                            } else {

                            }
                            ?>
                    </td>

                    </td>

                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    </thead>
    </table>
    <?php Helper::importView("partials/footer.view.php") ?>
</body>