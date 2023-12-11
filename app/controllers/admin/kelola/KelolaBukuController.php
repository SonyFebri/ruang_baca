<?php
class KelolaBukuController
{
    public function kelolaBukuPage()
    {
        $bookService = BookService::getInstance();
        $book = $bookService->getAllBuku();
        $data = [
            "books" => $book
        ];
        return Helper::view("admin/kelola/kelolaBuku", $data);
    }
    public function katalogBukuPage()
    {
        $bookService = BookService::getInstance();
        $book = $bookService->getAllBuku();
        $data = [
            "books" => $book
        ];
        return Helper::view("anggota/katalogBuku", $data);
    }
}