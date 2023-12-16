<?php Helper::importView("partials/headerAdmin.view.php") ?>
<div class="container mt-5">
    <h2>Tambah Buku</h2>

    <form action="<?php $addBookProses ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="id_kategori" class="form-label">ID Rak</label>
            <select class="form-select" id="id_kategori" name="id_kategori" required>
                <?php
                /**
                 * @var KategoriModel[] $categories
                 */
                foreach ($categories as $category): ?>
                <option value="<?php echo $category->getIdKategori(); ?>">
                    <?php echo $category->getNamaKategori(); ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="id_rak" class="form-label">ID Rak</label>
            <select class="form-select" id="id_rak" name="id_rak" required>
                <?php
                /**
                 * @var RakModel[] $rak
                 */
                foreach ($rak as $shelf): ?>
                <option value="<?php echo $shelf->getIdRak(); ?>">
                    <?php echo $shelf->getNamaRak(); ?>
                </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="judul_buku" class="form-label">Judul Buku</label>
            <input type="text" class="form-control" id="judul_buku" name="judul_buku" required>
        </div>

        <div class="mb-3">
            <label for="cover_buku" class="form-label">Cover Buku</label>
            <input type="file" class="form-control" id="cover_buku" name="cover_buku" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" id="penulis" name="penulis" required>
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="text" class="form-control" id="stok" name="stok" required>
        </div>

        <div class="mb-3">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="tel" class="form-control" id="tahun_terbit" name="tahun_terbit" required>
        </div>

        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
        </div>

        <div class="mb-3">
            <label for="denda" class="form-label">Denda</label>
            <input type="text" class="form-control" id="denda" name="denda" required>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>

</div>