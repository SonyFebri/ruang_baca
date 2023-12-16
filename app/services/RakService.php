<?php
class RakService
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
    public function SelectAllRak()
    {
        $rawShelf = $this->db->selectAll('tb_rak');
        // return Helper::dd($rawShelf);
        $shelf = [];
        if ($rawShelf) {
            foreach ($rawShelf as $rawShelfs) {
                $shelf[] = RakModel::fromStdClass($rawShelfs);
            }
            return $shelf;
        }
        return $shelf;
    }
}