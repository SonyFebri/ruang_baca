<body>
    <?php Helper::importView("partials/headerAnggota.view.php") ?>


    <div class="tabel">
        <table class="table table-striped" style="margin-left: 50px;">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Admin</th>
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
                 * @var PeminjamanModel[] $histories 
                 */
                $index = 1;
                foreach ($histories as $history): ?>
                    <tr>
                        <td scope="row">
                            <?= $index++; ?>
                        </td>
                        <td>
                            <?= $history->getNamaPeminjam() ?>
                        </td>
                        <td>
                            <?= $history->getTotalItem() ?>
                        </td>
                        <td>
                            <?= $history->getTanggalPinjam() ?>
                        </td>
                        <td>
                            <?= $history->getTenggatWaktu() ?>
                        </td>
                        <td>
                            <?= $history->getStatus() ?>
                        </td>
                        <td>
                            <?= $history->getTanggalPengembalian() ?>
                        </td>
                        <td>
                            <form action="<?= App::get("root_uri") . "/admin/kelola/detailPeminjaman" ?>" method="post"
                                style="display: inline-block;">
                                <input type="hidden" name="id_peminjaman" value="<?= $history->getIdPeminjaman() ?>">
                                <button type="submit" class="btn btn-sm btn-info">
                                    Detail
                                </button>
                            </form>
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