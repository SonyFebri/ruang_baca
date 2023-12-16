<?php
class RakModel
{
    protected $idRak;
    protected $namaRak;

    // Konstruktor
    public function __construct($idRak, $namaRak)
    {
        $this->idRak = $idRak;
        $this->namaRak = $namaRak;
    }
    public static function fromStdClass($stdObject): RakModel
    {
        return new RakModel(
            $stdObject->id_rak,
            $stdObject->nama_rak,
        );
    }
    // Getter dan Setter
    public function getIdRak()
    {
        return $this->idRak;
    }

    public function getNamaRak()
    {
        return $this->namaRak;
    }

    public function setIdRak($idRak)
    {
        $this->idRak = $idRak;
    }
    public function setNamaRak($namaRak)
    {
        $this->namaRak = $namaRak;
    }

}