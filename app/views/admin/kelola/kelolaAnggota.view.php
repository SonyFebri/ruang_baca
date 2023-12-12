<body>
    <?php Helper::importView("partials/header.view.php") ?>


    <div class="container mt-3">
        <a href="<?php echo App::get("root_uri") . "/admin/user/addUser" ?>" class="btn btn-primary mb-3">Tambahkan
            User</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id Users</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                /**
                 * @var UserModel[] $anggota
                 */
                for ($i = 0; $i < count($anggota); $i++):
                    $user = $anggota[$i];
                    ?>
                <tr>
                    <td scope="row">
                        <?= $i + 1; ?>
                    </td>
                    <td scope="row">
                        <?= $user->getIdUser() ?>
                    </td>
                    <td scope="row">
                        <?= $user->getNama() ?>
                    </td>
                    <td scope="row">
                        <?= $user->getUsername() ?>
                    </td>
                    <td scope="row">
                        <?= $user->getAlamat() ?>
                    </td>
                    <td scope="row">
                        <?= $user->getNoTlp() ?>
                    </td>
                    <td scope="row">
                        <?= $user->getJenisKelamin() ?>
                    </td>
                    <td scope="row">
                        <a href="edit_user.php?id=<?= $user->getIdUser(); ?>" class="btn btn-warning">Edit</a>
                    </td>
                </tr>
                <?php endfor; ?>
            </tbody>
        </table>
    </div>

    <?php Helper::importView("partials/footer.view.php") ?>
</body>