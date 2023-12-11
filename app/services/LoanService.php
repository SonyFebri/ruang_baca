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
    public function getAllLoans()
    {
        $rawLoans = $this->db->selectAll("tb_peminjaman");
        $loans = [];

        if ($rawLoans) {
            foreach ($rawLoans as $rawLoan) {
                $loans[] = BookModel::fromStdClass($rawLoan);
            }
            return $loans;
        }

        return $loans;
    }
    public function getAllHistoryLoans(array $where)
    {
        $rawLoans = $this->db->selectAll('tb_peminajaman');

        $loans = [];    

        if ($rawLoans) {
            foreach ($rawLoans as $rawLoan) {
                $loans[] = PeminjamanModel::fromStdClass($rawLoan);
            }
        }

        return $loans;
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

    

    // $loan = $loanService::getInstance()->getSingleLoan(['id_user' => $id_user]);

    // Session::getInstance()->get('id_user');

    // $loanDetails = $loanService::getInstance()->getLoanDetails(['id_peminjaman' => $id_peminjaman]);

    // $loan->setPeminjamanDetails($loanDetails);

}