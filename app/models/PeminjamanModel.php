<?php

class PeminjamanModel
{
    protected int $idPeminjaman;
    protected int $idUser;
    protected ?int $idAdmin;
    protected int $totalItem;
    protected ?string $tanggalPinjam;
    protected ?string $tenggatWaktu;
    protected string $status;
    protected ?string $tanggalPengembalian;

    protected array $peminjamanDetails;

    protected string $namaPeminjam;
    protected ?string $namaAdmin;

    public function __construct(
        int $idPeminjaman,
        int $idUser,
        ?int $idAdmin,
        int $totalItem,
        ?string $tanggalPinjam,
        ?string $tenggatWaktu,
        string $status,
        ?string $tanggalPengembalian,
        string $namaPeminjam,


    ) {
        $this->idPeminjaman = $idPeminjaman;
        $this->idUser = $idUser;
        $this->idAdmin = $idAdmin;
        $this->namaPeminjam = $namaPeminjam;

        $this->totalItem = $totalItem;
        $this->tanggalPinjam = $tanggalPinjam;
        $this->tenggatWaktu = $tenggatWaktu;
        $this->status = $status;
        $this->tanggalPengembalian = $tanggalPengembalian;


    }

    public static function fromStdClass($stdObject): PeminjamanModel
    {
        $idPeminjaman = $stdObject['id_peminjaman'];
        $idUser = $stdObject['id_user'];
        $idAdmin = $stdObject['id_admin'];
        $totalItem = $stdObject['total_item'];
        $tanggalPinjam = $stdObject['tanggal_pinjam'];
        $tenggatWaktu = $stdObject['tenggat_waktu'];
        $status = $stdObject['status'];
        $tanggalPengembalian = $stdObject['tanggal_pengembalian'];
        $namaPeminjam = $stdObject['nama_peminjam'];

        return new PeminjamanModel(
            $idPeminjaman,
            $idUser,
            $idAdmin,
            $totalItem,
            $tanggalPinjam,
            $tenggatWaktu,
            $status,
            $tanggalPengembalian,
            $namaPeminjam,

        );
    }

    // getters
    public function getIdPeminjaman(): int
    {
        return $this->idPeminjaman;
    }

    public function getIdUser(): int
    {
        return $this->idUser;
    }

    public function getIdAdmin(): int
    {
        return $this->idAdmin;
    }

    public function getTotalItem(): int
    {
        return $this->totalItem;
    }

    public function getTanggalPinjam(): string
    {
        return $this->tanggalPinjam;
    }

    public function getTenggatWaktu(): string
    {
        return $this->tenggatWaktu;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function getTanggalPengembalian(): string
    {
        return $this->tanggalPengembalian ?? '-';
    }
    public function getPeminjamandetails(): array
    {
        return $this->peminjamanDetails;
    }

    public function getNamaPeminjam(): string
    {
        return $this->namaPeminjam;
    }



    // setters
    public function setIdPeminjaman(int $idPeminjaman): void
    {
        $this->idPeminjaman = $idPeminjaman;
    }

    public function setIdUser(int $idUser): void
    {
        $this->idUser = $idUser;
    }
    public function setIdAdmin(int $idAdmin): void
    {
        $this->idAdmin = $idAdmin;
    }
    public function setTotalItem(int $totalItem): void
    {
        $this->totalItem = $totalItem;
    }
    public function setTanggalPinjam(string $tanggalPinjam): void
    {
        $this->tanggalPinjam = $tanggalPinjam;
    }
    public function setTenggatWaktu(string $tenggatWaktu): void
    {
        $this->tenggatWaktu = $tenggatWaktu;
    }
    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
    public function setTanggalPengembalian(string $tanggalPengembalian): void
    {
        $this->tanggalPengembalian = $tanggalPengembalian;
    }

    public function setPeminjamanDetails(array $details): void
    {
        $this->peminjamanDetails = $details;
    }

    public function setUser(string $namaPeminjam): void
    {
        $this->namaPeminjam = $namaPeminjam;
    }

}