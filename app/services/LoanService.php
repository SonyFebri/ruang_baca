<?php
class LoanService
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
    public function getAllLoansRequest()
    {
        $query = "SELECT
        p.*,
        u_peminjam.nama AS nama_peminjam
    FROM
        tb_PEMINJAMAN p
    JOIN
        tb_USER u_peminjam ON p.id_user = u_peminjam.id_user
    WHERE
        p.status = 'Pending';
    ";
        $rawLoans = $this->db->executeFetch($query);
        $loans = [];
        // return Helper::dd($rawLoans);
        if ($rawLoans) {
            foreach ($rawLoans as $rawLoan) {
                $loans[] = PeminjamanModel::fromStdClass($rawLoan);
            }
            return $loans;
        }

        return $loans;
    }
    public function getAllHistoryLoans()
    {
        $query = "SELECT
        p.*,
        u_peminjam.nama AS nama_peminjam
    FROM
        tb_PEMINJAMAN p
    JOIN
        tb_USER u_peminjam ON p.id_user = u_peminjam.id_user
    WHERE
        p.status <> 'Pending'
    ORDER BY
        CASE WHEN p.status = 'Dipinjam' THEN 0 ELSE 1 END, p.status";

        $rawLoans = $this->db->executeFetch($query);
        // return Helper::dd($rawLoans);
        $loan = [];
        foreach ($rawLoans as $rawLoan) {
            $loan[] = PeminjamanModel::fromStdClass($rawLoan);

        }
        return $loan;
    }

    public function getSingleLoan(array $where): PeminjamanModel|null
    {
        $rawLoan = $this->db->findWhere(
            'tb_peminjaman',
            $where
        );

        $loan = PeminjamanModel::fromStdClass($rawLoan);

        if ($rawLoan) {
            return $loan;
        }

        return null;
    }
    public function insertToLoan($where)
    {
        $query = "INSERT INTO tb_peminjaman (id_user, total_item, status)
        SELECT id_user, total_item, 'Pending' AS status
        FROM tb_CART
        WHERE id_user = :id_user";
        $this->db->execute($query, $where);
        $id_peminjaman = $this->db->getLastInsertId();
        return $id_peminjaman;

    }
    public function updateStatusLoan($where)
    {
        $query = "UPDATE tb_PEMINJAMAN
        SET
            status = 'Dipinjam',
            id_admin = :id_user,
            tanggal_pinjam = NOW(),
            tenggat_waktu = DATE_ADD(NOW(), INTERVAL 7 DAY)
        WHERE id_peminjaman = :id_peminjaman";
        $this->db->execute($query, $where);
    }
    public function updateLoanReturn($where)
    {
        $query = "UPDATE tb_PEMINJAMAN
        SET
            status = 'Telah Dikembalikan', tanggal_pengembalian = NOW()
        WHERE id_peminjaman = :id_peminjaman";
        $this->db->execute($query, $where);
    }



    // $loan = $loanService::getInstance()->getSingleLoan(['id_user' => $id_user]);

    // Session::getInstance()->get('id_user');

    // $loanDetails = $loanService::getInstance()->getLoanDetails(['id_peminjaman' => $id_peminjaman]);

    // $loan->setPeminjamanDetails($loanDetails);

}