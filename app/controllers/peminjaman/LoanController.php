<?php
class LoanController
{
    // public function peminjamanPage()
    // {
    //     $loanService = LoanService::getInstance();
    //     $loan = $loanService->getAllLoans();
    //     $data = [
    //         "loans" => $loan
    //     ];
    //     return Helper::view("admin/kelola/daftarPeminjaman", $data);
    // }
    public function history()
    {
        // $loanService = LoanService::getInstance();
        // $loan = $loanService->getAllHistoryLoans();
        $data = [
            "loans" => []
        ];
        return Helper::view("", $data);
    }
}