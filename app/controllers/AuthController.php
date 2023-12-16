<?php
class AuthController
{
    public function loginPage()
    {

        $data = [
            'loginEndpoint' => App::get('root_uri') . '/auth/login',
        ];

        return Helper::view("login", $data);
    }

    public function login()
    {

        if (
            isset($_POST['username']) && $_POST['username'] != '' &&
            isset($_POST['password']) && $_POST['password'] != ''
        ) {
            $username = $_POST['username'];
            $password = $_POST['password'];


            $userService = UserService::getInstance();

            /**
             * @var UserModel $user
             */

            $user = $userService->getSingleUserByUsername($username);

            if ($user) {
                if (password_verify($password, $user->getPassword())) {

                    // Session::getInstance()->push('user', $user); 
                    $_SESSION['id_user'] = $user->getIdUser();
                    $_SESSION['role'] = $user->getRole();
                    $_SESSION['nama'] = $user->getNama();
                    $_SESSION['username'] = $user->getUsername();
                    $_SESSION['password'] = $user->getPassword();
                    $_SESSION['foto_user'] = $user->getFotoUser();
                    $_SESSION['alamat'] = $user->getAlamat();
                    $_SESSION['no_tlp'] = $user->getNoTlp();
                    $_SESSION['jenis_kelamin'] = $user->getJenisKelamin();

                    if ($user->getRole() == 'admin') {
                        return Helper::redirect("/admin/dashboard");
                    } elseif ($user->getRole() == 'anggota') {
                        return Helper::redirect("/anggota/dashboard");
                    } else {
                        echo "Fiqlal logged";
                    }
                } else {
                    return Helper::redirect("/auth/login");
                }
            } else {
                return Helper::redirect("/auth/login");
            }
        }
    }
    public function logout()
    {
        try {
            session_destroy();
            return Helper::redirect("/auth/login");
        } catch (Exception $e) {
            echo 'Logout failed: ' . $e->getMessage();
        }
    }
}