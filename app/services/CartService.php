<?php
class CartService
{
    /**
     * @var QueryBuilder $db
     */
    protected $db;

    private static $instances = [];

    protected function __construct()
    {
        $this->db = App::get('database');
        assert($this->db instanceof QueryBuilder);
    }

    protected function __clone()
    {
    }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }

    public static function getInstance(): self
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }


    public function insertToCart(int $id_user)
    {
        $data = [
            "id_user" => $id_user
        ];
        $this->db->insert("tb_cart", $data);

    }
    public function updateCart($where)
    {
        $this->db->execute("UPDATE tb_cart 
        SET total_item = (SELECT COUNT(*) FROM tb_detail_cart WHERE id_cart = tb_cart.id_cart)
        WHERE id_user = :id_user", $where);

    }
}