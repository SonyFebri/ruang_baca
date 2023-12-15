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

        foreach ($loans as $loan) {
            // $loan->setUser($userService->getSingleUser(['id_user' => $loan->getIdUser()]));
            // $loan->setUser($userService->getSingleUser(['id_admin' => $loan->getIdUser()]));
        }

        $data = [
            "loans" => $loans
        ];
        return Helper::view("admin/kelola/daftarRequest", $data);
    }
    public function peminjamanDetail()
    {
        $loanService = LoanService::getInstance();
        $detailLoanService = DetailLoanService::getInstance();
        $userService = UserService::getInstance();

        $id_peminjaman = isset($_POST['id_peminjaman']) ? $_POST['id_peminjaman'] : null;

        if ($id_peminjaman !== null) {

            /**
             * @var PeminjamanModel $loan
             */
            $loan = $loanService->getSingleLoan(['id_peminjaman' => $id_peminjaman]);

            if ($loan) {
                $loan->setPeminjamanDetails($detailLoanService->getLoanDetails(['id_peminjaman', $loan->getIdPeminjaman()]));
                // $loan->setUser($userService->getSingleUser(['id_user' => $loan->getIdUser()]));
                // $loan->setAdmin($userService->getSingleUser(['id_admin' => $loan->getIdAdmin()]));  

                $data = [
                    "loans" => $loan
                ];

                return Helper::view("admin/kelola/detailPeminjaman", $data);
            } else {

            }
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