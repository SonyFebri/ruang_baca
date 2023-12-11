<?php
class KategoriModel
{
    protected $idKategori;
    protected $namaKategori;
    public function __construct($idKategori, $namaKategori)
    {
        $this->idKategori = $idKategori;
        $this->namaKategori = $namaKategori;
    }
    public static function fromStdClass($stdObject): KategoriModel
    {
        return new KategoriModel(
            $stdObject->idKategori,
            $stdObject->namaKategori,
        );
    }
    // Getter dan Setter
    public function getIdKategori()
    {
        return $this->idKategori;
    }

    public function getNamaKategori()
    {
        return $this->namaKategori;
    }

    public function setIdKategori($idKategori)
    {
        $this->idKategori = $idKategori;
    }
    public function setNamaKategori($namaKategori)
    {
        $this->namaKategori = $namaKategori;
    }
}