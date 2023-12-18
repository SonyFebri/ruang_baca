<?php
class AnggotaController
{
    public function dashboardPage()
    {
        $idUser = Session::getInstance()->get('id_user');
        $id_user = [
            'id_user' => $idUser
        ];
        // return Helper::dd($id_user);
        $bookService = BookService::getInstance();
        $book = $bookService->getLastBook($id_user);
        $data = [
            'book' => $book
        ];

        return Helper::view("anggota/dashboard", $data);
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
    public function history()
    {
        $idUser = Session::getInstance()->get('id_user');
        $loanService = LoanService::getInstance();
        $id_user = [
            'id_user' => $idUser
        ];
        $loans = $loanService->getHistory($id_user);
        $data = [
            'histories' => $loans
        ];
        return Helper::view("anggota/history", $data);
    }
}