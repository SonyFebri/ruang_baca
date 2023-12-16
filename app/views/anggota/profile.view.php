<?php Helper::importView("partials/headerAnggota.view.php") ?>
<div class="container mt-4">
    <form action="submit_form.php" method="post">
        <!-- Ganti "submit_form.php" dengan endpoint pengiriman formulir aktual Anda -->
        <div class="row">
            <!-- Foto di sisi kiri -->
            <div class="col-md-4">
                <img src="<?php echo App::get("root_uri") . $foto_user ?>" alt="Foto Profil"
                    class="img-fluid rounded border border-4 border-secondary">
            </div>

            <!-- Informasi di sebelah kanan -->
            <div class="col-md-8">
                <!-- id_user -->
                <div class="form-group row">
                    <label for="id_user" class="col-sm-3 col-form-label">ID</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="id_user" name="id_user"
                            value="<?php echo $id_user ?>">
                    </div>
                </div>

                <!-- nama -->
                <div class="form-group row">
                    <label for="nama" class="col-sm-3 col-form-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                    </div>
                </div>

                <!-- username -->
                <div class="form-group row">
                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="username" name="username"
                            value="<?php echo $username ?>">
                    </div>
                </div>

                <!-- alamat -->
                <div class="form-group row">
                    <label for="alamat" class="col-sm-3 col-form-label">Alamat</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                    </div>
                </div>

                <!-- no_tlp -->
                <div class="form-group row">
                    <label for="no_tlp" class="col-sm-3 col-form-label">No. Telepon</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="no_tlp" name="no_tlp" value="<?php echo $no_tlp ?>">
                    </div>
                </div>

                <!-- jenis_kelamin -->
                <div class="form-group row">
                    <label for="jenis_kelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                        <?php
                        $displayed_jenis_kelamin = ($jenis_kelamin === 'L') ? 'Laki-Laki' : (($jenis_kelamin === 'P') ? 'Perempuan' : $jenis_kelamin);
                        ?>
                        <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin"
                            value="<?php echo $displayed_jenis_kelamin ?>">
                    </div>
                </div>

                <!-- role -->
                <div class="form-group row">
                    <label for="role" class="col-sm-3 col-form-label">Role</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="role" name="role" value="<?php echo $role ?>">
                    </div>
                </div>

                <!-- Tombol Kirim -->
                <div class="form-group row">
                    <div class="col-sm-9 offset-sm-3">
                        <button type="submit" class="btn btn-primary" id="submitBtn" name="submitBtn">Kirim</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>