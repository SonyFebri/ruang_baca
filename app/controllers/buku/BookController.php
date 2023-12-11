<?php
class BookController
{
    public function searchBook()
    {
        $bookService = BookService::getInstance();

        $searchTerm = isset($_GET['q']) ? $_GET['q'] : '';
        $book = $bookService->searchBook($searchTerm);

        $data = [
            "books" => $book
        ];

        return Helper::view("anggota/katalogBuku", $data);
    }
    public function searchBooksById()
    {
        $bookService = BookService::getInstance();
        $book = $bookService->getBooksByTitle($_GET["id_buku"]);
        $data = [
            "books" => $book
        ];
        return Helper::view("", $data);
    }
}