<?php
class CartController
{
    public function addToDetailCart()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['id_buku'])) {

                $id_buku = $_POST['id_buku'];

                $id_user = Session::getInstance()->get('id_user');
                $data = [
                    'id_buku' => $id_buku, 'id_user' => $id_user
                ];
                $userId = [
                    'id_user' => $id_user
                ];
                $detailCartService = DetailCartService::getInstance();
                $cartService = CartService::getInstance();
                $detailCartService->insertToDetailCart($data);
                $cartService->updateCart($userId);
                return Helper::redirect("/anggota/katalogBuku");

            }

        }
    }
}