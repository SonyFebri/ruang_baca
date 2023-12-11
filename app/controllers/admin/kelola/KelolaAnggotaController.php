<?php
class KelolaAnggotaController
{
    public function kelolaAnggotaPage()
    {
        $data = [
            'kelolaAnggota' => App::get('root_uri') . '/admin/kelola/kelolaAnggota',
        ];

        return Helper::view("/admin/kelola/kelolaAnggota", $data);
    }
    public function kelolaAnggota()
    {
        $AnggotaService = AnggotaService::getInstance();
        $anggota = $AnggotaService->getAllAnggota();
        $data = [
            "anggota" => $anggota
        ];
        return Helper::view("admin/kelola/kelolaAnggota", $data);
    }
}