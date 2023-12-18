<?php

class BookModel1
{
    protected int $idBuku;
    protected int $idKategori;
    protected int $idRak;
    protected string $judulBuku;
    protected string $coverBuku;
    protected string $penulis;
    protected int $stok;
    protected int $stokTersedia;
    protected int $tahunTerbit;
    protected string $deskripsi;
    protected float $denda;

    public function __construct(
        int $idBuku,
        int $idKategori,
        int $idRak,
        string $judulBuku,
        string $coverBuku,
        string $penulis,
        int $stok,
        int $stokTersedia,
        int $tahunTerbit,
        string $deskripsi,
        float $denda
    ) {
        $this->idBuku = $idBuku;
        $this->idKategori = $idKategori;
        $this->idRak = $idRak;
        $this->judulBuku = $judulBuku;
        $this->coverBuku = $coverBuku;
        $this->penulis = $penulis;
        $this->stok = $stok;
        $this->stokTersedia = $stokTersedia;
        $this->tahunTerbit = $tahunTerbit;
        $this->deskripsi = $deskripsi;
        $this->denda = $denda;
    }

    public static function fromStdClass($stdObject): BookModel1
    {

        $idBuku = $stdObject['id_buku'];
        $idKategori = $stdObject['id_kategori'];
        $idRak = $stdObject['id_rak'];
        $judulBuku = $stdObject['judul_buku'];
        $coverBuku = $stdObject['cover_buku'];
        $penulis = $stdObject['penulis'];
        $stok = $stdObject['stok'];
        $stokTersedia = $stdObject['stok_tersedia'];
        $tahunTerbit = $stdObject['tahun_terbit'];
        $deskripsi = $stdObject['deskripsi'];
        $denda = $stdObject['denda'];
        return new BookModel1($idBuku, $idKategori, $idRak, $judulBuku, $coverBuku,
            $penulis, $stok, $stokTersedia, $tahunTerbit, $deskripsi, $denda);
    }

    // getters
    public function getIdBuku(): int
    {
        return $this->idBuku;
    }

    public function getIdKategori(): int
    {
        return $this->idKategori;
    }

    public function getIdRak(): int
    {
        return $this->idRak;
    }

    public function getJudulBuku(): string
    {
        return $this->judulBuku;
    }

    public function getCoverBuku(): string
    {
        return $this->coverBuku;
    }

    public function getPenulis(): string
    {
        return $this->penulis;
    }

    public function getStok(): int
    {
        return $this->stok;
    }

    public function getStokTersedia(): int
    {
        return $this->stokTersedia;
    }

    public function getTahunTerbit(): int
    {
        return $this->tahunTerbit;
    }

    public function getDeskripsi(): string
    {
        return $this->deskripsi;
    }

    public function getDenda(): float
    {
        return $this->denda;
    }

    // setters

    public function setIdBuku(int $idBuku): void
    {
        $this->idBuku = $idBuku;
    }

    public function setIdKategori(int $idKategori): void
    {
        $this->idKategori = $idKategori;
    }

    public function setIdRak(int $idRak): void
    {
        $this->idRak = $idRak;
    }

    public function setJudulBuku(string $judulBuku): void
    {
        $this->judulBuku = $judulBuku;
    }

    public function setCoverBuku(string $coverBuku): void
    {
        $this->coverBuku = $coverBuku;
    }

    public function setPenulis(string $penulis): void
    {
        $this->penulis = $penulis;
    }

    public function setStok(int $stok): void
    {
        $this->stok = $stok;
    }

    public function setStokTersedia(int $stokTersedia): void
    {
        $this->stokTersedia = $stokTersedia;
    }

    public function setTahunTerbit(int $tahunTerbit): void
    {
        $this->tahunTerbit = $tahunTerbit;
    }

    public function setDeskripsi(string $deskripsi): void
    {
        $this->deskripsi = $deskripsi;
    }

    public function setDenda(float $denda): void
    {
        $this->denda = $denda;
    }
}