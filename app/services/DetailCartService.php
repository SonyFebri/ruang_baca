<?php
class DetailCartService
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


    public function insertToDetailCart($where)
    {
        $this->db->execute("INSERT INTO tb_detail_cart (id_cart, id_buku) 
        (SELECT id_cart, :id_buku 
        FROM tb_cart 
        WHERE id_user = :id_user)", $where);
    }
    public function getDetailCartUser($where)
    {
        $query = "SELECT tb_detail_cart.*, tb_buku.judul_buku, tb_buku.penulis,tb_buku.tahun_terbit 
        FROM tb_buku
        JOIN tb_detail_cart ON tb_buku.id_buku = tb_detail_cart.id_buku
        JOIN tb_cart ON tb_detail_cart.id_cart = tb_cart.id_cart
        WHERE tb_cart.id_user = :id_user;
        ";
        $rawCartDetails = $this->db->executeFetch($query, $where);
        $detailCart = [];
        foreach ($rawCartDetails as $rawCartDetail) {
            $detailCart[] = DetailCartModel::fromStdClass($rawCartDetail);

        }
        return $detailCart;
    }
    public function deleteRowCartDetail($where)
    {
        $query = "DELETE FROM tb_detail_cart WHERE id_detail_cart = :id_detail_cart";
        $this->db->execute($query, $where);
    }

}