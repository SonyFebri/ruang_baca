<?php
class DetailPeminjamanModel
{
    public $idDetailPeminjaman;
    public $idPeminjaman;
    public $idBuku;

    public function __construct(
        int $idDetailPeminjaman,
        int $idPeminjaman,
        int $idBuku
    ) {
        $this->idDetailPeminjaman = $idDetailPeminjaman;
        $this->idPeminjaman = $idPeminjaman;
        $this->idBuku = $idBuku;
    }
    public static function fromStdClass($stdObject): DetailPeminjamanModel
    {
        return new DetailPeminjamanModel(
            $stdObject->idDetailPeminjaman,
            $stdObject->idPeminjaman,
            $stdObject->idBuku
        );
    }
    public function getIdDetailPeminjaman(): int
    {
        return $this->idDetailPeminjaman;
    }
    public function getIdPeminjaman(): int
    {
        return $this->idPeminjaman;
    }
    public function getIdBuku(): int
    {
        return $this->idBuku;
    }

    public function setIddetailPeminjaman(int $idDetailPeminjaman): void
    {
        $this->idDetailPeminjaman = $idDetailPeminjaman;
    }
    public function setIdPeminjaman(int $idPeminjaman): void
    {
        $this->idPeminjaman = $idPeminjaman;
    }
    public function setIdBuku(int $idBuku): void
    {
        $this->idBuku = $idBuku;
    }


}