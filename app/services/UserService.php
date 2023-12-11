<?php
class UserService
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

    public function getAllUser()
    {
        $rawUsers = $this->db->selectAll("tb_user");

        if ($rawUsers) {
            $users = [];
            foreach ($rawUsers as $rawUser) {
                $users[] = UserModel::fromStdClass($rawUser);
            }
            return $users;
        }
    }

    public function getSingleUserByUsername(string $username)
    {
        $rawUser = $this->db->findOne('tb_user', ['username' => $username]);

        $user = UserModel::fromStdClass($rawUser);

        return $user;
    }

    public function getSingleUser(array $where): ?UserModel
    {
        $rawUser = $this->db->findOne('tb_user', $where);

        $user = UserModel::fromStdClass($rawUser);

        return $user;
    }
    public function insertUser(
        int $id_user,
        string $nama,
        string $username,
        string $password,
        string $foto_user,
        string $alamat,
        string $no_tlp,
        string $jenis_kelamin,
        string $role)
    {
        $data = [
            'id_user' => $id_user,
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'foto_user' => $foto_user,
            'alamat' => $alamat,
            'no_tlp' => $no_tlp,
            'jenis_kelamin' => $jenis_kelamin,
            'role' => $role
        ];

        $this->db->insert('tb_user', $data);
    }
}