<?php

class KelolaPeminjamanController
{
    public function peminjamanPage()
    {
        $loanService = LoanService::getInstance();
        $userService = UserService::getInstance();

        /**
         * @var PeminjamanModel[] $loans
         */
        $loans = $loanService->getAllLoans();

        foreach ($loans as $loan) {
            $loan->setUser($userService->getSingleUser(['id_user' => $loan->getIdUser()]));
            $loan->setUser($userService->getSingleUser(['id_admin' => $loan->getIdUser()]));
        }

        $data = [
            "loans" => $loans
        ];
        return Helper::view("admin/kelola/daftarPeminjaman", $data);
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
                $loan->setUser($userService->getSingleUser(['id_user' => $loan->getIdUser()]));
                $loan->setAdmin($userService->getSingleUser(['id_admin' => $loan->getIdAdmin()]));

                $data = [
                    "loans" => $loan
                ];

                return Helper::view("admin/kelola/detailPeminjaman", $data);
            } else {

            }
        } else {

        }
    }



}