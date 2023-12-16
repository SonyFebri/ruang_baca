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
    public function addBookPage()
    {
        $rakService = RakService::getInstance();
        $kategoriService = CategoryService::getInstance();
        $categories = $kategoriService->SelectAllCategory();

        $shelf = $rakService->SelectAllRak();
        $data = [
            'rak' => $shelf,
            'categories' => $categories,
            'addBookProses' => App::get('root_uri') . '',
        ];

        return Helper::view('admin/buku/addBuku', $data);

    }
    public function addBook()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (
                isset($_POST['id_kategori'], $_POST['id_rak'], $_POST['judul_buku'], $_FILES['cover_buku'],
                $_POST['penulis'], $_POST['stok'], $_POST['tahun_terbit'], $_POST['deskripsi'], $_POST['denda']) &&
                $_POST['id_kategori'] != '' &&
                $_POST['id_rak'] != '' &&
                $_POST['judul_buku'] != '' &&
                $_FILES['cover_buku']['name'] != '' &&
                $_POST['penulis'] != '' &&
                $_POST['stok'] != '' &&
                $_POST['tahun_terbit'] != '' &&
                $_POST['deskripsi'] != '' &&
                $_POST['denda'] != ''
            ) {

                $bookService = BookService::getInstance();

                $id_kategori = $_POST['id_kategori'];
                $id_rak = $_POST['id_rak'];
                $judul_buku = $_POST['judul_buku'];
                $penulis = $_POST['penulis'];
                $stok = $_POST['stok'];
                $stok_tersedia = $_POST['stok'];
                $tahun_terbit = $_POST['tahun_terbit'];
                $deskripsi = $_POST['deskripsi'];
                $denda = $_POST['denda'];

                $cover_buku = $_FILES['cover_buku'];

                $uploadDir = 'public/cover/';
                $uploadFile = $uploadDir . basename($cover_buku['name']);
                $cover_buku_path = '/' . $uploadFile;

                if (move_uploaded_file($cover_buku['tmp_name'], $uploadFile)) {

                    $bookService->insertBook(
                        $id_kategori,
                        $id_rak,
                        $judul_buku,
                        $cover_buku_path,
                        $penulis,
                        $stok,
                        $stok_tersedia,
                        $tahun_terbit,
                        $deskripsi,
                        $denda
                    );

                    return Helper::redirect("/admin/kelola/addBook");
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