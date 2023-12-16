<?php

class KelolaPeminjamanController
{
    public function requestPeminjamanPage()
    {
        $loanService = LoanService::getInstance();
        $userService = UserService::getInstance();

        /**
         * @var PeminjamanModel[] $loans
         */
        $loans = $loanService->getAllLoansRequest();


        $data = [
            "loans" => $loans
        ];
        return Helper::view("admin/kelola/daftarRequest", $data);
    }

    public function peminjamanDetail()
    {
        $detailLoanService = DetailLoanService::getInstance();

        $id_peminjaman = isset($_POST['id_peminjaman']) ? $_POST['id_peminjaman'] : null;
        $id = [
            'id_peminjaman' => $id_peminjaman
        ];

        if ($id_peminjaman !== null) {
            $loanDetails = $detailLoanService->getLoanDetails($id);
            $data = [
                'loanDetails' => $loanDetails
            ];
            return Helper::view("admin/kelola/detailPeminjaman", $data);
        } else {

        }

    }
    public function konfirmasiRequest()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['id_peminjaman'])) {
                $loanId = $_POST['id_peminjaman'];
                $userId = Session::getInstance()->get('id_user');
                $data = [
                    'id_peminjaman' => $loanId,
                    'id_user' => $userId
                ];
                $id_peminjaman = [
                    'id_peminjaman' => $loanId
                ];
                $loanService = LoanService::getInstance();
                $bookService = BookService::getInstance();

                $loanService->updateStatusLoan($data);
                $bookService->kurangiQuantity($id_peminjaman);

                return Helper::redirect("/admin/kelola/daftarRequest");
            }
        }
    }
    public function daftarPeminjamanPage()
    {

        $loanService = LoanService::getInstance();
        $loans = $loanService->getAllHistoryLoans();
        $data = [
            'loan' => $loans
        ];

        return Helper::view("admin/kelola/daftarPeminjaman", $data);
    }
    public function konfirmasiPengembalian()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['id_peminjaman'])) {
                $loanId = $_POST['id_peminjaman'];

                $id_peminjaman = [
                    'id_peminjaman' => $loanId
                ];
                $loanService = LoanService::getInstance();
                $bookService = BookService::getInstance();

                $loanService->updateLoanReturn($id_peminjaman);
                $bookService->tambahQuantity($id_peminjaman);

                return Helper::redirect("/admin/kelola/daftarPeminjaman");
            }
        }
    }
}