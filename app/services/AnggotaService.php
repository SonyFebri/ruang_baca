<?php
class AnggotaService
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

    public function getAllAnggota()
    {
        $rawUsers = $this->db->findWhere("tb_user", ["role" => "anggota"]);

        if ($rawUsers) {
            $users = [];
            foreach ($rawUsers as $rawUser) {
                $users[] = UserModel::fromStdClass($rawUser);
            }
            return $users;
        }
    }
}