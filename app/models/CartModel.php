<?php
class CartModel
{
    public $idCart;
    public $idUser;
    public $totalItem;

    public function __construct(
        int $idCart,
        int $idUser,
        int $totalItem
    ) {
        $this->idCart = $idCart;
        $this->idUser = $idUser;
        $this->totalItem = $totalItem;
    }

    public static function fromStdClass($stdObject): CartModel
    {
        return new CartModel(
            $stdObject->idCart,
            $stdObject->idUser,
            $stdObject->totalItem
        );
    }
}