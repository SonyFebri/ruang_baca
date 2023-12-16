<?php Helper::importView("partials/headerAnggota.view.php") ?>
<div class="container mt-4">
    <h2>Keranjang</h2>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul Buku</th>
                <th scope="col">Penulis</th>
                <th scope="col">Tahun Terbit</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            /**
             * @var DetailCartModel[] $cartDetails
             */
            $index = 1;
            foreach ($cartDetails as $cartDetail): ?>
                <tr>
                    <td scope="row">
                        <?= $index++; ?>
                    </td>
                    <td>
                        <?= $cartDetail->getJudulBuku() ?>
                    </td>

                    <td>
                        <?= $cartDetail->getPenulis() ?>
                    </td>
                    <td>
                        <?= $cartDetail->getTahunTerbit() ?>
                    </td>
                    <td>
                        <form action="<?php echo App::get("root_uri") . "/anggota/cart/deleteCartDetail" ?>" method="post">
                            <input type="hidden" name="id_detail_cart" value="<?= $cartDetail->getIdDetailCart(); ?>">
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            <form action="<?php echo App::get("root_uri") . "/anggota/cart/submitCart" ?>" method="post">
                <input type="hidden" name="id_cart" value="<?= $cartDetail->getIdCart(); ?>">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </tbody>
    </table>

    <!-- Tombol Submit di luar tabel -->

</div>