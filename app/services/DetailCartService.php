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

}