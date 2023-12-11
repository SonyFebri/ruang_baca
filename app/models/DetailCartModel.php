<?php
class DetailCartModel
{
    public $idDetailCart;
    public $idCart;
    public $idBuku;

    public function __construct(
        int $idDetailCart,
        int $idCart,
        int $idBuku
    ) {
        $this->idDetailCart = $idDetailCart;
        $this->idCart = $idCart;
        $this->idBuku = $idBuku;
    }
    public static function fromStdClass($stdObject): DetailCartModel
    {
        return new DetailCartModel(
            $stdObject->idDetailCart,
            $stdObject->idPeminjaman,
            $stdObject->idBuku
        );
    }

    //getter
    public function getIdDetailCart(): int
    {
        return $this->idDetailCart;
    }
    public function getICart(): int
    {
        return $this->idCart;
    }
    public function getIdBuku(): int
    {
        return $this->idBuku;
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
}