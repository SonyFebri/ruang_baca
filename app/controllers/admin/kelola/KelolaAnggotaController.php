<?php
class KelolaAnggotaController
{
    public function kelolaAnggota()
    {
        $AnggotaService = AnggotaService::getInstance();
        $anggota = $AnggotaService->getAllAnggota();
        $data = [
            "anggota" => $anggota
        ];
        return Helper::view("/admin/kelola/kelolaAnggota", $data);
    }

}