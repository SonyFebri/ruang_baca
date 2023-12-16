<?php
class AnggotaController
{
    public function dashboardPage()
    {
        return Helper::view("anggota/dashboard");
    }
    public function profilePage()
    {


        $data = [
            'id_user' => Session::getInstance()->get('id_user'),
            'role' => Session::getInstance()->get('role'),
            'nama' => Session::getInstance()->get('nama'),
            'username' => Session::getInstance()->get('username'),
            'password' => Session::getInstance()->get('password'),
            'foto_user' => Session::getInstance()->get('foto_user'),
            'alamat' => Session::getInstance()->get('alamat'),
            'no_tlp' => Session::getInstance()->get('no_tlp'),
            'jenis_kelamin' => Session::getInstance()->get('jenis_kelamin')
        ];

        return Helper::view("anggota/profile", $data);
    }


}