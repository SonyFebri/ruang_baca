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
    public function detailCartPage()
    {
        $id_user = Session::getInstance()->get('id_user');
        $userId = [
            'id_user' => $id_user
        ];
        $detailCartService = DetailCartService::getInstance();
        $detailCart = $detailCartService->getDetailCartUser($userId);

        $data = [
            'cartDetails' => $detailCart
        ];

        return Helper::view("/anggota/detailCart", $data);
    }
    public function deleteItem()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['id_detail_cart'])) {
                $idDetail = $_POST['id_detail_cart'];
                $id_user = Session::getInstance()->get('id_user');
                $userId = [
                    'id_user' => $id_user
                ];
                $idDetailCart = [
                    'id_detail_cart' => $idDetail
                ];

                $cartService = CartService::getInstance();
                $detailCartService = DetailCartService::getInstance();
                $detailCartService->deleteRowCartDetail($idDetailCart);
                $cartService->updateCart($userId);
                return Helper::redirect('/anggota/cart/detailCart');
            }
        }
    }
}