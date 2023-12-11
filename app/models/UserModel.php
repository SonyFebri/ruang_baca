<?php

class UserModel
{
    protected int $idUser;
    protected string $nama;
    protected string $username;
    protected string $password;
    protected string $fotoUser;
    protected string $alamat;
    protected string $noTlp;
    protected string $jenisKelamin;
    protected string $role;

    public function __construct(int $idUser, string $nama, string $username, string $password, string $fotoUser, string $alamat, string $noTlp, string $jenisKelamin, string $role)
    {
        $this->idUser = $idUser;
        $this->nama = $nama;
        $this->username = $username;
        $this->password = $password;
        $this->fotoUser = $fotoUser;
        $this->alamat = $alamat;
        $this->noTlp = $noTlp;
        $this->jenisKelamin = $jenisKelamin;
        $this->role = $role;
    }

    public static function fromStdClass($stdObject): UserModel
    {
        return new UserModel(
            $stdObject->id_user,
            $stdObject->nama,
            $stdObject->username,
            $stdObject->password,
            $stdObject->foto_user,
            $stdObject->alamat,
            $stdObject->no_tlp,
            $stdObject->jenis_kelamin,
            $stdObject->role
        );
    }

    // getters
    public function getIdUser(): int
    {
        return $this->idUser;
    }

    public function getNama(): string
    {
        return $this->nama;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getFotoUser(): string
    {
        return $this->fotoUser;
    }

    public function getAlamat(): string
    {
        return $this->alamat;
    }

    public function getNoTlp(): string
    {
        return $this->noTlp;
    }

    public function getJenisKelamin(): string
    {
        return $this->jenisKelamin;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    // setters

    public function setIdUser(int $idUser): void
    {
        $this->idUser = $idUser;
    }

    public function setNama(string $nama): void
    {
        $this->nama = $nama;
    }

    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function setFotoUser(string $fotoUser): void
    {
        $this->fotoUser = $fotoUser;
    }

    public function setAlamat(string $alamat): void
    {
        $this->alamat = $alamat;
    }

    public function setNoTlp(string $noTlp): void
    {
        $this->noTlp = $noTlp;
    }

    public function setJenisKelamin(string $jenisKelamin): void
    {
        $this->jenisKelamin = $jenisKelamin;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }
}