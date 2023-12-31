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
    public function kurangiQuantity($where)
    {
        echo "buku";
        $query = "UPDATE tb_BUKU
        SET stok_tersedia = stok_tersedia - 1
        WHERE id_buku IN (
            SELECT id_buku
            FROM tb_detail_peminjaman
            WHERE id_peminjaman = :id_peminjaman)";
        $this->db->execute($query, $where);
    }
    public function tambahQuantity($where)
    {
        echo "buku";
        $query = "UPDATE tb_BUKU
        SET stok_tersedia = stok_tersedia + 1
        WHERE id_buku IN (
            SELECT id_buku
            FROM tb_detail_peminjaman
            WHERE id_peminjaman = :id_peminjaman)";
        $this->db->execute($query, $where);
    }
    public function insertBook(
        int $id_kategori,
        int $id_rak,
        string $judul_buku,
        string $cover_buku,
        string $penulis,
        int $stok,
        int $stok_tersedia,
        int $tahun_terbit,
        string $deskripsi,
        float $denda
    ) {
        $data = [
            'id_kategori' => $id_kategori,
            'id_rak' => $id_rak,
            'judul_buku' => $judul_buku,
            'cover_buku' => $cover_buku,
            'penulis' => $penulis,
            'stok' => $stok,
            'stok_tersedia' => $stok_tersedia,
            'tahun_terbit' => $tahun_terbit,
            'deskripsi' => $deskripsi,
            'denda' => $denda
        ];

        $this->db->insert('tb_buku', $data);
    }
    public function getLastBook($where)
    {

        $query = "SELECT tb_buku.*
        FROM tb_buku
        JOIN tb_detail_peminjaman ON tb_buku.id_buku = tb_detail_peminjaman.id_buku
        JOIN tb_peminjaman ON tb_detail_peminjaman.id_peminjaman = tb_peminjaman.id_peminjaman
        WHERE tb_peminjaman.id_user = :id_user
        ORDER BY tb_peminjaman.tanggal_pinjam DESC
        LIMIT 1";

        $rawBooks = $this->db->executeFetch($query, $where);

        $books = [];
        if ($rawBooks) {
            foreach ($rawBooks as $rawBook) {
                $books[] = BookModel1::fromStdClass($rawBook);
            }

            return $books;
        }
        return Helper::dd($where);
    }




}