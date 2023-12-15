<?php
class DetailCartModel
{
    protected $idDetailCart;
    protected $idCart;
    protected $idBuku;

    protected array $cartDetails;
    protected string $judulBuku;
    protected string $penulis;
    protected int $tahunTerbit;

    public function __construct(
        int $idDetailCart,
        int $idCart,
        int $idBuku,
        string $judulBuku,
        string $penulis,
        int $tahunTerbit

    ) {
        $this->idDetailCart = $idDetailCart;
        $this->idCart = $idCart;
        $this->idBuku = $idBuku;
        $this->judulBuku = $judulBuku;
        $this->penulis = $penulis;
        $this->tahunTerbit = $tahunTerbit;

    }

    public static function fromStdClass($stdObject): DetailCartModel
    {
        $idDetailCart = $stdObject['id_detail_cart'];
        $idCart = $stdObject['id_cart'];
        $idBuku = $stdObject['id_buku'];
        $judulBuku = $stdObject['judul_buku'];
        $penulis = $stdObject['penulis'];
        $tahunTerbit = $stdObject['tahun_terbit'];

        return new DetailCartModel($idDetailCart, $idCart, $idBuku, $judulBuku, $penulis, $tahunTerbit);
    }


    //getter
    public function getIdDetailCart(): int
    {
        return $this->idDetailCart;
    }
    public function getIdCart(): int
    {
        return $this->idCart;
    }
    public function getIdBuku(): int
    {
        return $this->idBuku;
    }
    public function getJudulBuku(): string
    {
        return $this->judulBuku;
    }
    public function getPenulis(): string
    {
        return $this->penulis;
    }
    public function getTahunTerbit(): int
    {
        return $this->tahunTerbit;
    }

    //setter

    public function setIdDetailCart(int $idDetailCart): void
    {
        $this->idDetailCart = $idDetailCart;
    }

    public function setIdCart(int $idCart): void
    {
        $this->idBuku = $idCart;
    }
    public function setIdBuku(int $idBuku): void
    {
        $this->idBuku = $idBuku;
    }
    public function setJudulBuku(string $judulBuku): void
    {
        $this->judulBuku = $judulBuku;
    }
    public function setPenulis(string $penulis): void
    {
        $this->penulis = $penulis;
    }
    public function setTahunTerbit(int $tahunTerbit): void
    {
        $this->tahunTerbit = $tahunTerbit;
    }
}