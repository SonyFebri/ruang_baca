<?php
class DetailLoanService
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
    public function getLoanDetails(array $where): array|null
    {
        $rawLoanDetails = $this->db->findWhere(
            'tb_detail_peminjaman',
            $where
        );

        $loanDetails = [];

        foreach ($rawLoanDetails as $rawLoanDetail) {
            $loanDetails[] = DetailPeminjamanModel::fromStdClass($rawLoanDetail);
        }

        return $loanDetails;
    }
}