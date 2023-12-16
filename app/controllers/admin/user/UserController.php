<?php
class UserController
{
    public function addUserPage()
    {
        $data = [
            'addUserProses' => App::get('root_uri') . '/admin/user/addUser'
        ];

        return Helper::view("/admin/user/addUser", $data);
    }
    public function addUser()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (
                isset($_POST['username'], $_POST['password'], $_POST['nama'], $_POST['id_user'], $_FILES['foto_user'],
                $_POST['alamat'], $_POST['no_tlp'], $_POST['jenis_kelamin'], $_POST['role']) &&
                $_POST['username'] != '' &&
                $_POST['password'] != '' &&
                $_POST['nama'] != '' &&
                $_POST['id_user'] != '' &&
                $_FILES['foto_user']['name'] != '' &&
                $_POST['alamat'] != '' &&
                $_POST['no_tlp'] != '' &&
                $_POST['jenis_kelamin'] != '' &&
                $_POST['role'] != ''
            ) {

                $userService = UserService::getInstance();

                $username = $_POST['username'];
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $nama = $_POST['nama'];
                $id_user = $_POST['id_user'];
                $alamat = $_POST['alamat'];
                $no_tlp = $_POST['no_tlp'];
                $jenis_kelamin = $_POST['jenis_kelamin'];
                $role = $_POST['role'];

                $foto_user = $_FILES['foto_user'];

                $uploadDir = 'public/profile/';
                $uploadFile = $uploadDir . basename($foto_user['name']);
                $foto_user_path = '/' . $uploadFile;

                if (move_uploaded_file($foto_user['tmp_name'], $uploadFile)) {

                    $userService->insertUser(
                        $id_user,
                        $nama,
                        $username,
                        $password,
                        $foto_user_path,
                        $alamat,
                        $no_tlp,
                        $jenis_kelamin,
                        $role
                    );

                    if ($role == 'anggota') {
                        $cartService = CartService::getInstance();
                        $cartService->insertToCart($id_user);
                    }

                    return Helper::view("admin/user/addUser");
                } else {
                    echo 'Gagal mengunggah file.';
                }
            } else {
                echo 'Semua field harus diisi.';
            }
        } else {
            echo 'Metode request tidak valid.';
        }
    }
}