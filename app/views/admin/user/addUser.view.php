<div class="container mt-5">
    <h2>Tambah User</h2>
    <form action="<?php echo App::get('root_uri') . '/admin/user/addUser'; ?>" method="post"
        enctype="multipart/form-data">
        <!-- id_user -->
        <div class="mb-3">
            <label for="id_user" class="form-label">ID User</label>
            <input type="text" class="form-control" id="id_user" name="id_user" maxlength="10" required>
        </div>

        <!-- nama -->
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>

        <!-- username -->
        <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>

        <!-- password -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <!-- foto_user -->
        <div class="mb-3">
            <label for="foto_user" class="form-label">Foto User</label>
            <input type="file" class="form-control" id="foto_user" name="foto_user" accept="image/*">
        </div>

        <!-- alamat -->
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
        </div>

        <!-- no_tlp -->
        <div class="mb-3">
            <label for="no_tlp" class="form-label">Nomor Telepon</label>
            <input type="tel" class="form-control" id="no_tlp" name="no_tlp" required>
        </div>

        <!-- jenis_kelamin -->
        <div class="mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <select class="form-select" id="jenis_kelamin" name="jenis_kelamin" required>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <!-- role -->
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-select" id="role" name="role" required>
                <option value="anggota">Anggota</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Tambah User</button>
    </form>
</div>