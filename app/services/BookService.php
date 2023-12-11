<?php
class BookService
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

    public function getAllBuku()
    {
        $rawBooks = $this->db->selectAll("tb_buku");
        $books = [];

        if ($rawBooks) {
            foreach ($rawBooks as $rawBook) {
                $books[] = BookModel::fromStdClass($rawBook);
            }
            return $books;
        }

        return $books;
    }
    public function searchBook($searchTerm)
    {
        $rawBooks = $this->db->findLike("tb_buku", "judul_buku", $searchTerm);
        $books = [];
        if ($rawBooks) {

            foreach ($rawBooks as $rawBook) {
                $books[] = BookModel::fromStdClass($rawBook);
            }
            return $books;
        }

        return $books;
    }
    public function getBooksByTitle($searchTerm)
    {
        $rawBooks = $this->db->findWhere("tb_buku", $searchTerm);
        $books = [];
        if ($rawBooks) {
            foreach ($rawBooks as $rawBook) {
                $books[] = BookModel::fromStdClass($rawBook);
            }
            return $books;
        }
    }
}