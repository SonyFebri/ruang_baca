<?php
class DetailPeminjamanModel
{
    protected $idDetailPeminjaman;
    protected $idPeminjaman;
    protected $idBuku;
    protected $judulBuku;

    public function __construct(
        int $idDetailPeminjaman,
        int $idPeminjaman,
        int $idBuku,
        string $judulBuku
    ) {
        $this->idDetailPeminjaman = $idDetailPeminjaman;
        $this->idPeminjaman = $idPeminjaman;
        $this->idBuku = $idBuku;
        $this->judulBuku = $judulBuku;
    }
    public static function fromStdClass($stdObject): DetailPeminjamanModel
    {
        $idDetailPeminjaman = $stdObject['id_detail_peminjaman'];
        $idPeminjaman = $stdObject['id_peminjaman'];
        $idBuku = $stdObject['id_buku'];
        $judulBuku = $stdObject['judul_buku'];
        return new DetailPeminjamanModel(
            $idDetailPeminjaman,
            $idPeminjaman,
            $idBuku,
            $judulBuku


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
    public function getJudulBuku(): string
    {
        return $this->judulBuku;
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
    public function setJudulBuku(string $judulBuku): void
    {
        $this->judulBuku = $judulBuku;
    }


}